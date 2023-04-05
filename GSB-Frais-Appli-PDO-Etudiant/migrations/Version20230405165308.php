<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230405165308 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {

        $this->addSql('ALTER TABLE LigneFraisHorsForfait ADD refuser TINYINT(1) NOT NULL, CHANGE mois mois CHAR(6) DEFAULT NULL, CHANGE idVisiteur idVisiteur CHAR(4) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
    $this->addSql('ALTER TABLE LigneFraisHorsForfait DROP refuser, CHANGE mois mois CHAR(6) NOT NULL, CHANGE idVisiteur idVisiteur CHAR(4) NOT NULL');

    }
}
