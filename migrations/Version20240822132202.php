<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240822132202 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE site_collecte_agent_collecte (site_collecte_id INT NOT NULL, agent_collecte_id INT NOT NULL, INDEX IDX_778075B49A24A576 (site_collecte_id), INDEX IDX_778075B4E1C4C186 (agent_collecte_id), PRIMARY KEY(site_collecte_id, agent_collecte_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE site_collecte_agent_collecte ADD CONSTRAINT FK_778075B49A24A576 FOREIGN KEY (site_collecte_id) REFERENCES site_collecte (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE site_collecte_agent_collecte ADD CONSTRAINT FK_778075B4E1C4C186 FOREIGN KEY (agent_collecte_id) REFERENCES agent_collecte (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE site_collecte_agent_collecte DROP FOREIGN KEY FK_778075B49A24A576');
        $this->addSql('ALTER TABLE site_collecte_agent_collecte DROP FOREIGN KEY FK_778075B4E1C4C186');
        $this->addSql('DROP TABLE site_collecte_agent_collecte');
    }
}
