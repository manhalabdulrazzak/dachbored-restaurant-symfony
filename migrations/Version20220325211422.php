<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220325211422 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE restaurant (id INT AUTO_INCREMENT NOT NULL, category_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, keywords VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, address VARCHAR(255) NOT NULL, phone VARCHAR(255) NOT NULL, email VARCHAR(30) NOT NULL, city VARCHAR(30) NOT NULL, country VARCHAR(30) NOT NULL, location VARCHAR(100) NOT NULL, status VARCHAR(10) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', detail LONGTEXT NOT NULL, images VARCHAR(255) NOT NULL, INDEX IDX_EB95123F12469DE2 (category_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE setting (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(150) DEFAULT NULL, keywords VARCHAR(255) DEFAULT NULL, description VARCHAR(255) DEFAULT NULL, company VARCHAR(150) DEFAULT NULL, address VARCHAR(255) DEFAULT NULL, phone VARCHAR(20) DEFAULT NULL, fax VARCHAR(20) DEFAULT NULL, email VARCHAR(75) DEFAULT NULL, smtpserver VARCHAR(20) DEFAULT NULL, smtpemail VARCHAR(50) DEFAULT NULL, smtppassword VARCHAR(20) DEFAULT NULL, smtpport VARCHAR(5) DEFAULT NULL, facebook VARCHAR(75) DEFAULT NULL, instagram VARCHAR(75) DEFAULT NULL, twitter VARCHAR(75) DEFAULT NULL, aboutus LONGTEXT DEFAULT NULL, contact LONGTEXT DEFAULT NULL, reference LONGTEXT DEFAULT NULL, status VARCHAR(7) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE restaurant ADD CONSTRAINT FK_EB95123F12469DE2 FOREIGN KEY (category_id) REFERENCES restaurant (id)');
        $this->addSql('ALTER TABLE user ADD name VARCHAR(30) NOT NULL, ADD image VARCHAR(50) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE restaurant DROP FOREIGN KEY FK_EB95123F12469DE2');
        $this->addSql('DROP TABLE restaurant');
        $this->addSql('DROP TABLE setting');
        $this->addSql('ALTER TABLE category CHANGE label label VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE keywords keywords VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE image image VARCHAR(100) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE status status VARCHAR(10) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE messenger_messages CHANGE body body LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE headers headers LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE queue_name queue_name VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE product CHANGE name name VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE description description VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE image image VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE user DROP name, DROP image, CHANGE email email VARCHAR(180) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE password password VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
