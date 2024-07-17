<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240715191033 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE impot_tom ADD propriete_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE impot_tom ADD CONSTRAINT FK_554F086518566CAF FOREIGN KEY (propriete_id) REFERENCES propriete (id)');
        $this->addSql('CREATE INDEX IDX_554F086518566CAF ON impot_tom (propriete_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE impot_tom DROP FOREIGN KEY FK_554F086518566CAF');
        $this->addSql('DROP INDEX IDX_554F086518566CAF ON impot_tom');
        $this->addSql('ALTER TABLE impot_tom DROP propriete_id');
    }
}
