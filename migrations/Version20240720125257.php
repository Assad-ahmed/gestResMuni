<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240720125257 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE impot_cfbp DROP FOREIGN KEY FK_FA0D0C0818566CAF');
        $this->addSql('DROP TABLE impot_cfbp');
        $this->addSql('ALTER TABLE impot_cfpb ADD propriete_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE impot_cfpb ADD CONSTRAINT FK_71400D9318566CAF FOREIGN KEY (propriete_id) REFERENCES propriete (id)');
        $this->addSql('CREATE INDEX IDX_71400D9318566CAF ON impot_cfpb (propriete_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE impot_cfbp (id INT AUTO_INCREMENT NOT NULL, propriete_id INT DEFAULT NULL, INDEX IDX_FA0D0C0818566CAF (propriete_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE impot_cfbp ADD CONSTRAINT FK_FA0D0C0818566CAF FOREIGN KEY (propriete_id) REFERENCES propriete (id)');
        $this->addSql('ALTER TABLE impot_cfpb DROP FOREIGN KEY FK_71400D9318566CAF');
        $this->addSql('DROP INDEX IDX_71400D9318566CAF ON impot_cfpb');
        $this->addSql('ALTER TABLE impot_cfpb DROP propriete_id');
    }
}
