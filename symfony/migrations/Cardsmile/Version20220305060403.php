<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220305060403 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'The description of my awesome migration!';
    }

    public function up(Schema $schema): void
    {

        $this->addSql('CREATE TABLE "user" (id INT  NOT NULL,
                                            name VARCHAR(255) DEFAULT NULL,
                                            role INTEGER DEFAULT NULL,
                                             PRIMARY KEY(id))');

    }

    public function down(Schema $schema): void
    {
        $this->addSql('DROP TABLE user');
    }
}
