<?php

declare(strict_types=1);

namespace Application\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190126183320 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('INSERT INTO user (username, username_canonical,email,email_canonical,enabled,salt,password,last_login,confirmation_token,password_requested_at,roles) VALUES ("admin", "admin","admin@mail.com","admin@mail.com","1",NULL,"$2y$13$VLiEk7fN22bwiP.FmL0nuObx4SRXTre3/IKE6WK79tzCz7L8mQZEG","2018-11-20 12:40:07",NULL,NULL,"a:1:{i:0;s:10:""ROLE_ADMIN"";}")');
    }

    /**
     * @param Schema $schema
     * @throws \Doctrine\DBAL\DBALException
     */
    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DELETE FROM user WHERE email="admin@mail.com"');
    }
}
