<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181223143956 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE admin_deneme (id INT AUTO_INCREMENT NOT NULL, deneme VARCHAR(230) DEFAULT NULL, id_x INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE admin_settings (id INT AUTO_INCREMENT NOT NULL, s_id INT NOT NULL, title VARCHAR(150) DEFAULT NULL, description VARCHAR(150) DEFAULT NULL, keywords VARCHAR(150) DEFAULT NULL, address VARCHAR(255) DEFAULT NULL, fax INT DEFAULT NULL, tel VARCHAR(150) DEFAULT NULL, email VARCHAR(150) DEFAULT NULL, smtpserver VARCHAR(150) DEFAULT NULL, smtpmail VARCHAR(150) DEFAULT NULL, smtppasw VARCHAR(20) DEFAULT NULL, smtpport VARCHAR(50) DEFAULT NULL, aboutus VARCHAR(250) DEFAULT NULL, contract VARCHAR(150) DEFAULT NULL, referans VARCHAR(150) DEFAULT NULL, create_at DATETIME NOT NULL, update_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE admin_cars CHANGE keywords keywords VARCHAR(150) NOT NULL, CHANGE type type VARCHAR(20) DEFAULT NULL, CHANGE image image VARCHAR(150) DEFAULT NULL');
        $this->addSql('ALTER TABLE admin_category CHANGE parent_id parent_id INT NOT NULL, CHANGE title title VARCHAR(40) NOT NULL, CHANGE keywords keywords VARCHAR(40) NOT NULL, CHANGE description description VARCHAR(255) NOT NULL, CHANGE status status VARCHAR(15) NOT NULL');
        $this->addSql('ALTER TABLE admin_image CHANGE image image VARCHAR(150) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE admin_deneme');
        $this->addSql('DROP TABLE admin_settings');
        $this->addSql('ALTER TABLE admin_cars CHANGE keywords keywords VARCHAR(150) DEFAULT NULL COLLATE latin1_swedish_ci, CHANGE type type VARCHAR(20) NOT NULL COLLATE latin1_swedish_ci, CHANGE image image VARCHAR(50) DEFAULT NULL COLLATE latin1_swedish_ci');
        $this->addSql('ALTER TABLE admin_category CHANGE parent_id parent_id INT DEFAULT NULL, CHANGE title title VARCHAR(40) DEFAULT NULL COLLATE latin1_swedish_ci, CHANGE keywords keywords VARCHAR(40) DEFAULT NULL COLLATE latin1_swedish_ci, CHANGE description description VARCHAR(255) DEFAULT NULL COLLATE latin1_swedish_ci, CHANGE status status VARCHAR(15) DEFAULT NULL COLLATE latin1_swedish_ci');
        $this->addSql('ALTER TABLE admin_image CHANGE image image VARCHAR(60) DEFAULT NULL COLLATE latin1_swedish_ci');
    }
}
