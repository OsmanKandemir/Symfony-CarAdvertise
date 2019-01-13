<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181224203232 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE admin_deneme (id INT AUTO_INCREMENT NOT NULL, deneme VARCHAR(230) DEFAULT NULL, id_x INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, name VARCHAR(45) DEFAULT NULL, status VARCHAR(230) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE admin_cars CHANGE keywords keywords VARCHAR(150) NOT NULL, CHANGE type type VARCHAR(20) DEFAULT NULL, CHANGE image image VARCHAR(150) DEFAULT NULL');
        $this->addSql('ALTER TABLE admin_settings DROP s_id, DROP status, CHANGE address address VARCHAR(255) DEFAULT NULL, CHANGE fax fax VARCHAR(255) DEFAULT NULL, CHANGE tel tel VARCHAR(150) DEFAULT NULL, CHANGE email email VARCHAR(150) DEFAULT NULL, CHANGE smtpserver smtpserver VARCHAR(150) DEFAULT NULL, CHANGE smtpmail smtpmail VARCHAR(150) DEFAULT NULL, CHANGE smtppasw smtppasw VARCHAR(20) DEFAULT NULL, CHANGE aboutus aboutus VARCHAR(255) DEFAULT NULL, CHANGE contract contract VARCHAR(255) DEFAULT NULL, CHANGE referans referans VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE admin_image CHANGE image image VARCHAR(150) DEFAULT NULL');
        $this->addSql('ALTER TABLE admin_category CHANGE parent_id parent_id INT NOT NULL, CHANGE title title VARCHAR(40) NOT NULL, CHANGE keywords keywords VARCHAR(40) NOT NULL, CHANGE description description VARCHAR(255) NOT NULL, CHANGE status status VARCHAR(15) NOT NULL');
        $this->addSql('ALTER TABLE admin_messages CHANGE name name VARCHAR(40) DEFAULT NULL, CHANGE email email VARCHAR(50) DEFAULT NULL, CHANGE website website VARCHAR(50) DEFAULT NULL, CHANGE subject subject VARCHAR(255) DEFAULT NULL, CHANGE message message VARCHAR(255) DEFAULT NULL, CHANGE comment comment VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE users CHANGE telefon telefon VARCHAR(40) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE admin_deneme');
        $this->addSql('DROP TABLE user');
        $this->addSql('ALTER TABLE admin_cars CHANGE keywords keywords VARCHAR(150) DEFAULT NULL COLLATE latin1_swedish_ci, CHANGE type type VARCHAR(20) NOT NULL COLLATE latin1_swedish_ci, CHANGE image image VARCHAR(50) DEFAULT NULL COLLATE latin1_swedish_ci');
        $this->addSql('ALTER TABLE admin_category CHANGE parent_id parent_id INT DEFAULT NULL, CHANGE title title VARCHAR(40) DEFAULT NULL COLLATE latin1_swedish_ci, CHANGE keywords keywords VARCHAR(40) DEFAULT NULL COLLATE latin1_swedish_ci, CHANGE description description VARCHAR(255) DEFAULT NULL COLLATE latin1_swedish_ci, CHANGE status status VARCHAR(15) DEFAULT NULL COLLATE latin1_swedish_ci');
        $this->addSql('ALTER TABLE admin_image CHANGE image image VARCHAR(60) DEFAULT NULL COLLATE latin1_swedish_ci');
        $this->addSql('ALTER TABLE admin_messages CHANGE name name VARCHAR(50) DEFAULT NULL COLLATE latin1_swedish_ci, CHANGE email email VARCHAR(100) DEFAULT NULL COLLATE latin1_swedish_ci, CHANGE website website VARCHAR(100) DEFAULT NULL COLLATE latin1_swedish_ci, CHANGE subject subject VARCHAR(100) DEFAULT NULL COLLATE latin1_swedish_ci, CHANGE message message LONGTEXT DEFAULT NULL COLLATE latin1_swedish_ci, CHANGE comment comment LONGTEXT DEFAULT NULL COLLATE latin1_swedish_ci');
        $this->addSql('ALTER TABLE admin_settings ADD s_id INT DEFAULT NULL, ADD status VARCHAR(50) DEFAULT NULL COLLATE latin1_swedish_ci, CHANGE address address LONGTEXT DEFAULT NULL COLLATE latin5_turkish_ci, CHANGE fax fax VARCHAR(60) DEFAULT NULL COLLATE latin1_swedish_ci, CHANGE tel tel VARCHAR(50) DEFAULT NULL COLLATE latin1_swedish_ci, CHANGE email email VARCHAR(50) DEFAULT NULL COLLATE latin1_swedish_ci, CHANGE smtpserver smtpserver VARCHAR(40) DEFAULT NULL COLLATE latin1_swedish_ci, CHANGE smtpmail smtpmail VARCHAR(80) DEFAULT NULL COLLATE latin1_swedish_ci, CHANGE smtppasw smtppasw VARCHAR(70) DEFAULT NULL COLLATE latin1_swedish_ci, CHANGE aboutus aboutus LONGTEXT DEFAULT NULL COLLATE latin5_turkish_ci, CHANGE contract contract LONGTEXT DEFAULT NULL COLLATE latin5_turkish_ci, CHANGE referans referans LONGTEXT DEFAULT NULL COLLATE latin5_turkish_ci');
        $this->addSql('ALTER TABLE users CHANGE telefon telefon LONGTEXT DEFAULT NULL COLLATE latin1_swedish_ci');
    }
}
