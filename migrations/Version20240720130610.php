<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240720130610 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE impot_cfnbp DROP FOREIGN KEY FK_FDC8923818566CAF');
        $this->addSql('DROP TABLE impot_cfnbp');
        $this->addSql('ALTER TABLE impot_cfnpb ADD propriete_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE impot_cfnpb ADD CONSTRAINT FK_768593A318566CAF FOREIGN KEY (propriete_id) REFERENCES propriete (id)');
        $this->addSql('CREATE INDEX IDX_768593A318566CAF ON impot_cfnpb (propriete_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE impot_cfnbp (id INT AUTO_INCREMENT NOT NULL, propriete_id INT DEFAULT NULL, INDEX IDX_FDC8923818566CAF (propriete_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE impot_cfnbp ADD CONSTRAINT FK_FDC8923818566CAF FOREIGN KEY (propriete_id) REFERENCES propriete (id)');
        $this->addSql('ALTER TABLE impot_cfnpb DROP FOREIGN KEY FK_768593A318566CAF');
        $this->addSql('DROP INDEX IDX_768593A318566CAF ON impot_cfnpb');
        $this->addSql('ALTER TABLE impot_cfnpb DROP propriete_id');
    }
}
