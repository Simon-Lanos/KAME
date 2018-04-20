<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180418120134 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE users (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, user_mail VARCHAR(255) NOT NULL, user_password VARCHAR(255) NOT NULL, user_token VARCHAR(255) DEFAULT NULL, user_token_time DATETIME NOT NULL, user_first_name VARCHAR(255) DEFAULT NULL, user_last_name VARCHAR(255) DEFAULT NULL, user_gender INT DEFAULT NULL, user_birthdate DATE DEFAULT NULL, user_has_accepted_terms SMALLINT DEFAULT NULL, user_has_confirmed_email SMALLINT DEFAULT NULL, user_creation_date DATETIME DEFAULT NULL, user_adress VARCHAR(255) DEFAULT NULL, user_avatar VARCHAR(255) DEFAULT NULL, zip_code INT DEFAULT NULL, user_city VARCHAR(255) DEFAULT NULL, user_speciality SMALLINT DEFAULT NULL, role_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE users');
    }
}
