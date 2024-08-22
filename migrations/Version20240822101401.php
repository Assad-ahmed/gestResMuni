<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240822101401 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contributeurs ADD agent_collecte_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE contributeurs ADD CONSTRAINT FK_CB29DABDE1C4C186 FOREIGN KEY (agent_collecte_id) REFERENCES agent_collecte (id)');
        $this->addSql('CREATE INDEX IDX_CB29DABDE1C4C186 ON contributeurs (agent_collecte_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contributeurs DROP FOREIGN KEY FK_CB29DABDE1C4C186');
        $this->addSql('DROP INDEX IDX_CB29DABDE1C4C186 ON contributeurs');
        $this->addSql('ALTER TABLE contributeurs DROP agent_collecte_id');
    }
}
