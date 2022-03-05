<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * // TODO
 */
final class Version20220305065120_user_card extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'The description of my awesome migration!';
    }

    public function up(Schema $schema): void
    {

        $this->addSql('CREATE TABLE "user_card" (id SERIAL NOT NULL,
                                            name VARCHAR(255) DEFAULT NULL,
                                            role INTEGER DEFAULT NULL,
                                             PRIMARY KEY(id))');

    }
    public function down(Schema $schema): void
    {
        $this->addSql('DROP TABLE user');
    }
}
