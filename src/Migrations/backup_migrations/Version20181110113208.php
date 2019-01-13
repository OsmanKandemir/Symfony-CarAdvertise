<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181110113208 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE users ADD name VARCHAR(30) NOT NULL, ADD osman VARCHAR(20) NOT NULL, ADD deneme VARCHAR(40) NOT NULL, ADD deneme1 VARCHAR(20) NOT NULL, DROP isimsoyisim, DROP email, DROP type, DROP reg_date, CHANGE id id INT AUTO_INCREMENT NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE users ADD email VARCHAR(50) DEFAULT NULL COLLATE latin1_swedish_ci, ADD type VARCHAR(30) NOT NULL COLLATE latin1_swedish_ci, ADD reg_date DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, DROP osman, DROP deneme, DROP deneme1, CHANGE id id INT UNSIGNED AUTO_INCREMENT NOT NULL, CHANGE name isimsoyisim VARCHAR(30) NOT NULL COLLATE latin1_swedish_ci');
    }
}
