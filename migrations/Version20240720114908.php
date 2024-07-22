<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240720114908 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE impot_cfbp DROP FOREIGN KEY FK_FA0D0C0876C50E4A');
        $this->addSql('DROP INDEX IDX_FA0D0C0876C50E4A ON impot_cfbp');
        $this->addSql('ALTER TABLE impot_cfbp CHANGE proprietaire_id propriete_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE impot_cfbp ADD CONSTRAINT FK_FA0D0C0818566CAF FOREIGN KEY (propriete_id) REFERENCES propriete (id)');
        $this->addSql('CREATE INDEX IDX_FA0D0C0818566CAF ON impot_cfbp (propriete_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE impot_cfbp DROP FOREIGN KEY FK_FA0D0C0818566CAF');
        $this->addSql('DROP INDEX IDX_FA0D0C0818566CAF ON impot_cfbp');
        $this->addSql('ALTER TABLE impot_cfbp CHANGE propriete_id proprietaire_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE impot_cfbp ADD CONSTRAINT FK_FA0D0C0876C50E4A FOREIGN KEY (proprietaire_id) REFERENCES propriete (id)');
        $this->addSql('CREATE INDEX IDX_FA0D0C0876C50E4A ON impot_cfbp (proprietaire_id)');
    }
}
