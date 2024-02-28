<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240228114059 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE contributeurs_site_collecte (contributeurs_id INT NOT NULL, site_collecte_id INT NOT NULL, INDEX IDX_FD4350D992A21D41 (contributeurs_id), INDEX IDX_FD4350D99A24A576 (site_collecte_id), PRIMARY KEY(contributeurs_id, site_collecte_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE contributeurs_site_collecte ADD CONSTRAINT FK_FD4350D992A21D41 FOREIGN KEY (contributeurs_id) REFERENCES contributeurs (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE contributeurs_site_collecte ADD CONSTRAINT FK_FD4350D99A24A576 FOREIGN KEY (site_collecte_id) REFERENCES site_collecte (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contributeurs_site_collecte DROP FOREIGN KEY FK_FD4350D992A21D41');
        $this->addSql('ALTER TABLE contributeurs_site_collecte DROP FOREIGN KEY FK_FD4350D99A24A576');
        $this->addSql('DROP TABLE contributeurs_site_collecte');
    }
}
