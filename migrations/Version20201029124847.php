<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201029124847 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE profil_hard_skills (profil_id INT NOT NULL, hard_skills_id INT NOT NULL, INDEX IDX_DE11DB00275ED078 (profil_id), INDEX IDX_DE11DB0044C6C0E1 (hard_skills_id), PRIMARY KEY(profil_id, hard_skills_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE profil_soft_skills (profil_id INT NOT NULL, soft_skills_id INT NOT NULL, INDEX IDX_C0988A6A275ED078 (profil_id), INDEX IDX_C0988A6A3642D998 (soft_skills_id), PRIMARY KEY(profil_id, soft_skills_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE profil_hard_skills ADD CONSTRAINT FK_DE11DB00275ED078 FOREIGN KEY (profil_id) REFERENCES profil (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE profil_hard_skills ADD CONSTRAINT FK_DE11DB0044C6C0E1 FOREIGN KEY (hard_skills_id) REFERENCES hard_skills (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE profil_soft_skills ADD CONSTRAINT FK_C0988A6A275ED078 FOREIGN KEY (profil_id) REFERENCES profil (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE profil_soft_skills ADD CONSTRAINT FK_C0988A6A3642D998 FOREIGN KEY (soft_skills_id) REFERENCES soft_skills (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE profil_hard_skills');
        $this->addSql('DROP TABLE profil_soft_skills');
    }
}
