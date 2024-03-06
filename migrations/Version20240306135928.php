<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240306135928 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE type_imp_ressource DROP FOREIGN KEY FK_83A9923B2E739B4B');
        $this->addSql('ALTER TABLE type_imp_ressource DROP FOREIGN KEY FK_83A9923BFC6CD52A');
        $this->addSql('DROP TABLE type_imp_ressource');
        $this->addSql('ALTER TABLE type_imp DROP FOREIGN KEY FK_3A06AB8AA3EA79C6');
        $this->addSql('DROP INDEX IDX_3A06AB8AA3EA79C6 ON type_imp');
        $this->addSql('ALTER TABLE type_imp DROP recettefiscale_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE type_imp_ressource (type_imp_id INT NOT NULL, ressource_id INT NOT NULL, INDEX IDX_83A9923B2E739B4B (type_imp_id), INDEX IDX_83A9923BFC6CD52A (ressource_id), PRIMARY KEY(type_imp_id, ressource_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE type_imp_ressource ADD CONSTRAINT FK_83A9923B2E739B4B FOREIGN KEY (type_imp_id) REFERENCES type_imp (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE type_imp_ressource ADD CONSTRAINT FK_83A9923BFC6CD52A FOREIGN KEY (ressource_id) REFERENCES ressource (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE type_imp ADD recettefiscale_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE type_imp ADD CONSTRAINT FK_3A06AB8AA3EA79C6 FOREIGN KEY (recettefiscale_id) REFERENCES recettefiscale (id)');
        $this->addSql('CREATE INDEX IDX_3A06AB8AA3EA79C6 ON type_imp (recettefiscale_id)');
    }
}
