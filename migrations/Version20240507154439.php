<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240507154439 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE impot_site_collecte (impot_id INT NOT NULL, site_collecte_id INT NOT NULL, INDEX IDX_3909E3A2DFA8F68 (impot_id), INDEX IDX_3909E3A9A24A576 (site_collecte_id), PRIMARY KEY(impot_id, site_collecte_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE impot_site_collecte ADD CONSTRAINT FK_3909E3A2DFA8F68 FOREIGN KEY (impot_id) REFERENCES impot (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE impot_site_collecte ADD CONSTRAINT FK_3909E3A9A24A576 FOREIGN KEY (site_collecte_id) REFERENCES site_collecte (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE impot_site_collecte DROP FOREIGN KEY FK_3909E3A2DFA8F68');
        $this->addSql('ALTER TABLE impot_site_collecte DROP FOREIGN KEY FK_3909E3A9A24A576');
        $this->addSql('DROP TABLE impot_site_collecte');
    }
}
