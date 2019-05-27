const express = require("express");
const router = express.Router();
const { ensureAuthenticated, forwardAuthenticated } = require("../config/auth");

//Project Model
const Project = require("../models/Project");
//User Model
const User = require("../models/User");

//Projects list
router.get("/", ensureAuthenticated, (req, res) => {
  Project.find({ isActive: true })
    .populate('leader')
    .then(projects => {
      res.render("projects/index", { projects: projects, user: req.user });
    })
    .catch(err => console.log(err));
});

//Archived Projects list
router.get("/archive", ensureAuthenticated, (req, res) => {
  Project.find({ isActive: false })
    .then(projects => {
      res.render("projects/archive", { projects: projects, user: req.user });
    })
    .catch(err =>  console.log(err));
});


//Create Project
router.get("/create", ensureAuthenticated, (req, res) =>{
  User.find({ _id: { $ne: req.user.id } })
  .then( users => {
 res.render("projects/create", {
   users: users,
   user: req.user,
   })
  })
  .catch(err => console.log(err));
});

//Create Handler
router.post("/create", ensureAuthenticated, (req, res) => {
  User.find({ _id: { $ne: req.user.id } })
  .then(users => {
 const {
   name,
   description,
   price,
   done_jobs,
   start_date,
   end_date
 } = req.body;
 let errors = [];
 if (!name || !description || !price || !start_date || !end_date) {
   errors.push({ msg: "Please enter all required fields!" });
 }

 if (start_date == end_date) {
   errors.push({ msg: "Start and end date must be different!" });
 }

 if (errors.length > 0) {
   res.render("projects/create", {
     errors,
     name,
     description,
     price,
     start_date,
     end_date,
     users: users,
     user: req.user
   });
 } else {
   //Vallidation passed
   Project.findOne({ name: name }).then(project => {
     if (project) {
       //Project exists
       errors.push({ msg: "Project name is already in use!" });
       res.render("projects/create", {
         errors,
         name,
         description,
         price,
         start_date,
         end_date,
         users: users,
         user: req.user
       });
     } else {
       User.findById(req.user.id).then(leader => {
         const newProject = new Project({
           errors,
           name,
           description,
           price,
           start_date,
           end_date
         });
         newProject.leader = leader;
         console.log(req.body.workers);
         console.log("FOR EACH");
          req.body.workers.forEach(worker => {
            console.log("usOO");
            console.log(worker);
           console.log("pusho");
           User.findById(worker)
           .then( user => {
            newProject.workers.push(user);
            console.log(newProject.workers);
              user.on_project.push(newProject);
              user.save()
              .then(err => console.log("Save user"))
              .catch(err => console.log(err));
           })
           .catch(err => console.log(err));
          
        });
             newProject
           .save()
           .then(project => {
            
             req.flash("success_msg", "You registerd new project!");
             res.redirect("/project");
           })
            .catch(err => console.log(err));
           leader.project_leader.push(newProject);
           leader.save();
       });
     }
   });
 }
})
.catch(err => console.log(err));
});

//Archive Project
router.post("/:id/archive", ensureAuthenticated, (req, res) => {
  const projectID = req.params.id;
  Project.findOne({ _id: projectID })
    .then(project => {
      project.isActive = false;
      project
            .save()
            .then(project => {
              req.flash("success_msg", "You archived project "+ project.name + "!");
              res.redirect("/project");
            })
            .catch(err => console.log(err));
    })
    .catch(err => console.log(err));
});

//Delete Project 
router.post("/:id/delete", ensureAuthenticated, (req, res) => {
  const projectID = req.params.id;
  Project.findOneAndDelete({ _id: projectID })
              .then(project => {
              req.flash("success_msg", "You deleted project!");
              res.redirect("/project");
            })
              .catch(err => console.log(err));
});


//Edit Project
router.get("/:id/edit", ensureAuthenticated, (req, res) => {
  const projectID = req.params.id;
  console.log("const");
  Project.findOne({ _id: projectID })
    .populate('workers')
    .then(project => {
      User.find({ _id: { $ne: req.user.id } })
        .then( users => {
      res.render("projects/edit", { project: project, user: req.user, users: users });
    })
    .catch(err => console.log(err));

  }).catch(err => console.log(err));
});

//Edit Handler
router.post("/:id/edit", ensureAuthenticated, (req, res) => {
  const projectID = req.params.id;
  let errors = [];
  Project.findOne({ _id: projectID })
    .then(project => {
      const {
        name,
        description,
        price,
        done_jobs,
        start_date,
        end_date
      } = req.body;
      if (!name || !description || !price || !start_date || !end_date) {
        errors.push({ msg: "Please enter all required fields!" });
      }

      if (start_date == end_date) {
        errors.push({ msg: "Start and end date must be different!" });
      }

      if (errors.length > 0) {
        res.render("projects/edit", {
          project: project,
          user: req.user,
          errors
        });
      } else {
         Project.findOne({ name: name })
          .then(projectName => {
            if (projectName) {
              if (projectName.name != project.name) {
                //Project exists
                errors.push({ msg: "Project name is already in use!" });
                res.render("projects/edit", {
                  errors,
                  project,
                  user: req.user
                });
              }
            } else {
              project.name = req.body.name;
              project.description = req.body.description;
              project.price = req.body.price;
              project.done_jobs = req.body.done_jobs;
              project.start_date = req.body.start_date;
              project.end_date = req.body.end_date;
              project
                .save()
                .then(project => {
                  req.flash(
                    "success_msg",
                    "You edit project " + project.name + "!"
                  );
                  res.redirect("/project");
                })
                .catch(err => console.log(err));
            }
          })
          .catch(err => console.log(err));
      }
    })
    .catch(err => console.log(err));
});

//Show Project
router.get("/:id", ensureAuthenticated, (req, res) => {
  const projectID = req.params.id;
  Project.findOne({ _id: projectID })
    .populate('leader')
    .then(project => {
      res.render("projects/show", { project: project, user: req.user });
    })
    .catch(err => console.log(err));
});


module.exports = router;
