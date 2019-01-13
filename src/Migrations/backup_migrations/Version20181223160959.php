<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181223160959 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE admin_deneme (id INT AUTO_INCREMENT NOT NULL, deneme VARCHAR(230) DEFAULT NULL, id_x INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE admin_cars CHANGE keywords keywords VARCHAR(150) NOT NULL, CHANGE type type VARCHAR(20) DEFAULT NULL, CHANGE image image VARCHAR(150) DEFAULT NULL');
        $this->addSql('ALTER TABLE admin_settings DROP status, CHANGE s_id s_id INT NOT NULL, CHANGE address address VARCHAR(255) DEFAULT NULL, CHANGE fax fax INT DEFAULT NULL, CHANGE tel tel VARCHAR(150) DEFAULT NULL, CHANGE email email VARCHAR(150) DEFAULT NULL, CHANGE smtpserver smtpserver VARCHAR(150) DEFAULT NULL, CHANGE smtpmail smtpmail VARCHAR(150) DEFAULT NULL, CHANGE smtppasw smtppasw VARCHAR(20) DEFAULT NULL, CHANGE aboutus aboutus VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE admin_image CHANGE image image VARCHAR(150) DEFAULT NULL');
        $this->addSql('ALTER TABLE admin_category CHANGE parent_id parent_id INT NOT NULL, CHANGE title title VARCHAR(40) NOT NULL, CHANGE keywords keywords VARCHAR(40) NOT NULL, CHANGE description description VARCHAR(255) NOT NULL, CHANGE status status VARCHAR(15) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE admin_deneme');
        $this->addSql('ALTER TABLE admin_cars CHANGE keywords keywords VARCHAR(150) DEFAULT NULL COLLATE latin1_swedish_ci, CHANGE type type VARCHAR(20) NOT NULL COLLATE latin1_swedish_ci, CHANGE image image VARCHAR(50) DEFAULT NULL COLLATE latin1_swedish_ci');
        $this->addSql('ALTER TABLE admin_category CHANGE parent_id parent_id INT DEFAULT NULL, CHANGE title title VARCHAR(40) DEFAULT NULL COLLATE latin1_swedish_ci, CHANGE keywords keywords VARCHAR(40) DEFAULT NULL COLLATE latin1_swedish_ci, CHANGE description description VARCHAR(255) DEFAULT NULL COLLATE latin1_swedish_ci, CHANGE status status VARCHAR(15) DEFAULT NULL COLLATE latin1_swedish_ci');
        $this->addSql('ALTER TABLE admin_image CHANGE image image VARCHAR(60) DEFAULT NULL COLLATE latin1_swedish_ci');
        $this->addSql('ALTER TABLE admin_settings ADD status VARCHAR(50) DEFAULT NULL COLLATE latin1_swedish_ci, CHANGE s_id s_id INT DEFAULT NULL, CHANGE address address VARCHAR(150) DEFAULT NULL COLLATE latin1_swedish_ci, CHANGE fax fax VARCHAR(60) DEFAULT NULL COLLATE latin1_swedish_ci, CHANGE tel tel VARCHAR(50) DEFAULT NULL COLLATE latin1_swedish_ci, CHANGE email email VARCHAR(50) DEFAULT NULL COLLATE latin1_swedish_ci, CHANGE smtpserver smtpserver VARCHAR(40) DEFAULT NULL COLLATE latin1_swedish_ci, CHANGE smtpmail smtpmail VARCHAR(80) DEFAULT NULL COLLATE latin1_swedish_ci, CHANGE smtppasw smtppasw VARCHAR(70) DEFAULT NULL COLLATE latin1_swedish_ci, CHANGE aboutus aboutus LONGTEXT DEFAULT NULL COLLATE latin1_swedish_ci');
    }
}
