<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220306062840_customer extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'customer';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('CREATE TABLE "customer" (id SERIAL NOT NULL,
                                            name VARCHAR(255) DEFAULT NULL,
                                             PRIMARY KEY(id))');

    }

    public function down(Schema $schema): void
    {
        $this->addSql('DROP TABLE "customer"');
    }
}
