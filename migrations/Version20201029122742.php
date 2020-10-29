<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201029122742 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE profil_test_competences DROP FOREIGN KEY FK_9F1DF168D92C4955');
        $this->addSql('DROP TABLE profil_test_competences');
        $this->addSql('DROP TABLE test_competences');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE profil_test_competences (profil_id INT NOT NULL, test_competences_id INT NOT NULL, INDEX IDX_9F1DF168275ED078 (profil_id), INDEX IDX_9F1DF168D92C4955 (test_competences_id), PRIMARY KEY(profil_id, test_competences_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE test_competences (id INT AUTO_INCREMENT NOT NULL, competences VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE profil_test_competences ADD CONSTRAINT FK_9F1DF168275ED078 FOREIGN KEY (profil_id) REFERENCES profil (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE profil_test_competences ADD CONSTRAINT FK_9F1DF168D92C4955 FOREIGN KEY (test_competences_id) REFERENCES test_competences (id) ON DELETE CASCADE');
    }
}
