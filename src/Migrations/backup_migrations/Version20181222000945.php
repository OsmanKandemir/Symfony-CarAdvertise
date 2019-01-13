<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181222000945 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE admin_image (id INT AUTO_INCREMENT NOT NULL, car_id INT DEFAULT NULL, image VARCHAR(100) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE admin_cars CHANGE keywords keywords VARCHAR(150) NOT NULL, CHANGE type type VARCHAR(20) DEFAULT NULL, CHANGE detail detail LONGTEXT DEFAULT NULL, CHANGE image image VARCHAR(150) DEFAULT NULL');
        $this->addSql('ALTER TABLE admin_category CHANGE parent_id parent_id INT NOT NULL, CHANGE title title VARCHAR(40) NOT NULL, CHANGE keywords keywords VARCHAR(40) NOT NULL, CHANGE description description VARCHAR(255) NOT NULL, CHANGE status status VARCHAR(15) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE admin_image');
        $this->addSql('ALTER TABLE admin_cars CHANGE keywords keywords VARCHAR(150) DEFAULT NULL COLLATE latin1_swedish_ci, CHANGE type type VARCHAR(20) NOT NULL COLLATE latin1_swedish_ci, CHANGE detail detail VARCHAR(700) DEFAULT NULL COLLATE latin1_swedish_ci, CHANGE image image VARCHAR(50) DEFAULT NULL COLLATE latin1_swedish_ci');
        $this->addSql('ALTER TABLE admin_category CHANGE parent_id parent_id INT DEFAULT NULL, CHANGE title title VARCHAR(40) DEFAULT NULL COLLATE latin1_swedish_ci, CHANGE keywords keywords VARCHAR(40) DEFAULT NULL COLLATE latin1_swedish_ci, CHANGE description description VARCHAR(255) DEFAULT NULL COLLATE latin1_swedish_ci, CHANGE status status VARCHAR(15) DEFAULT NULL COLLATE latin1_swedish_ci');
    }
}
