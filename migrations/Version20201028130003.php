<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201028130003 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE hard_skills DROP FOREIGN KEY FK_842FC240275ED078');
        $this->addSql('DROP INDEX IDX_842FC240275ED078 ON hard_skills');
        $this->addSql('ALTER TABLE hard_skills DROP profil_id');
        $this->addSql('ALTER TABLE soft_skills DROP FOREIGN KEY FK_9AA6932A275ED078');
        $this->addSql('DROP INDEX IDX_9AA6932A275ED078 ON soft_skills');
        $this->addSql('ALTER TABLE soft_skills DROP profil_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE hard_skills ADD profil_id INT NOT NULL');
        $this->addSql('ALTER TABLE hard_skills ADD CONSTRAINT FK_842FC240275ED078 FOREIGN KEY (profil_id) REFERENCES profil (id)');
        $this->addSql('CREATE INDEX IDX_842FC240275ED078 ON hard_skills (profil_id)');
        $this->addSql('ALTER TABLE soft_skills ADD profil_id INT NOT NULL');
        $this->addSql('ALTER TABLE soft_skills ADD CONSTRAINT FK_9AA6932A275ED078 FOREIGN KEY (profil_id) REFERENCES profil (id)');
        $this->addSql('CREATE INDEX IDX_9AA6932A275ED078 ON soft_skills (profil_id)');
    }
}
