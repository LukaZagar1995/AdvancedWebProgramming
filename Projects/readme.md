LV 3/4 Guide
=============

##Step 1: Setting up database
1) Used XAMPP and Apache to create my database locally.
2) Created virtual host so that i don't have to wright long address in web browser. I had to change two files, first one is
    httpd-vhosts.conf located in xampp/apache/conf/extra folder. 
    ```sh
    <VirtualHost *:80>
    	 DocumentRoot "C:\AdvancedWebProgramming\Projects\public"
    	 ServerName advanced.local
    
    	<Directory "C:\AdvancedWebProgramming\Projects\public">
    		 Options All
    		 AllowOverride All
    		 Require all granted
    	 </Directory>
    </VirtualHost>
    ```
   Second one was hosts file in Windows/System32/driver/etc folder.
    ```sh
   127.0.0.1    advanced.local
     ```
   Now I could open project from web browser entering advanced.local/.
3) Database parameters are located at .env file.
   ```sh
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=null
     DB_DATABASE=projects
     DB_USERNAME=root
     DB_PASSWORD=null
       ```
 