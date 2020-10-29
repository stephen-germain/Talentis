<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201028113127 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE profil_test (profil_id INT NOT NULL, test_id INT NOT NULL, INDEX IDX_D0276EEE275ED078 (profil_id), INDEX IDX_D0276EEE1E5D0459 (test_id), PRIMARY KEY(profil_id, test_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE test (id INT AUTO_INCREMENT NOT NULL, competences VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE profil_test ADD CONSTRAINT FK_D0276EEE275ED078 FOREIGN KEY (profil_id) REFERENCES profil (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE profil_test ADD CONSTRAINT FK_D0276EEE1E5D0459 FOREIGN KEY (test_id) REFERENCES test (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE hard_skills CHANGE profil_id profil_id INT NOT NULL');
        $this->addSql('ALTER TABLE soft_skills CHANGE profil_id profil_id INT NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE profil_test DROP FOREIGN KEY FK_D0276EEE1E5D0459');
        $this->addSql('DROP TABLE profil_test');
        $this->addSql('DROP TABLE test');
        $this->addSql('ALTER TABLE hard_skills CHANGE profil_id profil_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE soft_skills CHANGE profil_id profil_id INT DEFAULT NULL');
    }
}
