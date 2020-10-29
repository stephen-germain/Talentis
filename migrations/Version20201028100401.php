<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201028100401 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE hard_skills CHANGE profil_id profil_id INT NOT NULL');
        $this->addSql('ALTER TABLE soft_skills CHANGE profil_id profil_id INT NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE hard_skills CHANGE profil_id profil_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE soft_skills CHANGE profil_id profil_id INT DEFAULT NULL');
    }
}
