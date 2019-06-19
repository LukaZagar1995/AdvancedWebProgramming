<?php

declare(strict_types=1);

namespace Application\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190127201233 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE invoice (id INT AUTO_INCREMENT NOT NULL, invoicenumber VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET UTF8 COLLATE UTF8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE invoice__product (id INT AUTO_INCREMENT NOT NULL, product_id INT NOT NULL, invoice_id INT NOT NULL, quantity INT NOT NULL, INDEX IDX_B82ABF884584665A (product_id), INDEX IDX_B82ABF882989F1FD (invoice_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET UTF8 COLLATE UTF8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE product (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, serialNumber VARCHAR(255) NOT NULL, Description VARCHAR(255) NOT NULL, dateOfPurchase DATETIME NOT NULL, price NUMERIC(10, 2) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET UTF8 COLLATE UTF8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE invoice__product ADD CONSTRAINT FK_B82ABF884584665A FOREIGN KEY (product_id) REFERENCES product (id)');
        $this->addSql('ALTER TABLE invoice__product ADD CONSTRAINT FK_B82ABF882989F1FD FOREIGN KEY (invoice_id) REFERENCES invoice (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE invoice__product DROP FOREIGN KEY FK_B82ABF882989F1FD');
        $this->addSql('ALTER TABLE invoice__product DROP FOREIGN KEY FK_B82ABF884584665A');
        $this->addSql('DROP TABLE invoice');
        $this->addSql('DROP TABLE invoice__product');
        $this->addSql('DROP TABLE product');
    }
}
