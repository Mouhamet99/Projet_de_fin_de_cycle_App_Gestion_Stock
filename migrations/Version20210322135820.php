<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210322135820 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE bon_de_livraison (id INT AUTO_INCREMENT NOT NULL, created_at DATETIME NOT NULL, net_apayer DOUBLE PRECISION NOT NULL, remise DOUBLE PRECISION NOT NULL, mode_de_payement VARCHAR(255) DEFAULT NULL, facture VARCHAR(10) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bonde_commande (id INT AUTO_INCREMENT NOT NULL, fournisseur_bdc_id INT DEFAULT NULL, mail_entreprise VARCHAR(255) DEFAULT NULL, tel_entreprise VARCHAR(255) DEFAULT NULL, nom_fournisseur VARCHAR(255) DEFAULT NULL, mail_fournisseur VARCHAR(255) DEFAULT NULL, adresse_fournisseur VARCHAR(255) NOT NULL, note VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, numero VARCHAR(15) NOT NULL, totaux DOUBLE PRECISION DEFAULT NULL, etat VARCHAR(255) DEFAULT NULL, INDEX IDX_25085F03E515CA96 (fournisseur_bdc_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE employe (id INT AUTO_INCREMENT NOT NULL, service_id INT NOT NULL, nom VARCHAR(50) NOT NULL, prenom VARCHAR(50) NOT NULL, INDEX IDX_F804D3B9ED5CA9E6 (service_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fournisseur (id INT AUTO_INCREMENT NOT NULL, code_fourn INT NOT NULL, nom_fourn VARCHAR(255) NOT NULL, company VARCHAR(255) NOT NULL, tel_fourn INT NOT NULL, mail_fourn VARCHAR(255) DEFAULT NULL, adresse_fourn VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE medic_items (id INT AUTO_INCREMENT NOT NULL, item_medicament_id INT NOT NULL, medic_item_bdc_id INT NOT NULL, medic_item_bdl_id INT DEFAULT NULL, quantite INT DEFAULT NULL, prix_unitaire INT DEFAULT NULL, total INT NOT NULL, recu INT DEFAULT NULL, prix_achat DOUBLE PRECISION DEFAULT NULL, INDEX IDX_69983CD547A1C92C (item_medicament_id), INDEX IDX_69983CD5391228A7 (medic_item_bdc_id), INDEX IDX_69983CD5617138F1 (medic_item_bdl_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE medicament (id INT AUTO_INCREMENT NOT NULL, dci VARCHAR(255) NOT NULL, qrcode VARCHAR(255) DEFAULT NULL, pa DOUBLE PRECISION NOT NULL, pv DOUBLE PRECISION NOT NULL, dosage VARCHAR(255) NOT NULL, forme VARCHAR(255) NOT NULL, categorie VARCHAR(255) DEFAULT NULL, stock INT NOT NULL, avoir INT NOT NULL, dispo DOUBLE PRECISION DEFAULT NULL, cmm INT NOT NULL, jou_rupture INT DEFAULT NULL, jour_rupture_total INT DEFAULT NULL, seuil INT NOT NULL, max INT DEFAULT NULL, peremption DATE DEFAULT NULL, epuisementstock DATE DEFAULT NULL, min INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE service (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) NOT NULL, acronyme VARCHAR(10) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sortie_item (id INT AUTO_INCREMENT NOT NULL, sortie_id INT NOT NULL, medicament_id INT NOT NULL, date_sortie DATETIME NOT NULL, service VARCHAR(255) NOT NULL, demandeur VARCHAR(255) NOT NULL, quantite INT NOT NULL, INDEX IDX_18EF9B1DCC72D953 (sortie_id), INDEX IDX_18EF9B1DAB0D61F7 (medicament_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sorties (id INT AUTO_INCREMENT NOT NULL, reference DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE bonde_commande ADD CONSTRAINT FK_25085F03E515CA96 FOREIGN KEY (fournisseur_bdc_id) REFERENCES fournisseur (id)');
        $this->addSql('ALTER TABLE employe ADD CONSTRAINT FK_F804D3B9ED5CA9E6 FOREIGN KEY (service_id) REFERENCES service (id)');
        $this->addSql('ALTER TABLE medic_items ADD CONSTRAINT FK_69983CD547A1C92C FOREIGN KEY (item_medicament_id) REFERENCES medicament (id)');
        $this->addSql('ALTER TABLE medic_items ADD CONSTRAINT FK_69983CD5391228A7 FOREIGN KEY (medic_item_bdc_id) REFERENCES bonde_commande (id)');
        $this->addSql('ALTER TABLE medic_items ADD CONSTRAINT FK_69983CD5617138F1 FOREIGN KEY (medic_item_bdl_id) REFERENCES bon_de_livraison (id)');
        $this->addSql('ALTER TABLE sortie_item ADD CONSTRAINT FK_18EF9B1DCC72D953 FOREIGN KEY (sortie_id) REFERENCES sorties (id)');
        $this->addSql('ALTER TABLE sortie_item ADD CONSTRAINT FK_18EF9B1DAB0D61F7 FOREIGN KEY (medicament_id) REFERENCES medicament (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE medic_items DROP FOREIGN KEY FK_69983CD5617138F1');
        $this->addSql('ALTER TABLE medic_items DROP FOREIGN KEY FK_69983CD5391228A7');
        $this->addSql('ALTER TABLE bonde_commande DROP FOREIGN KEY FK_25085F03E515CA96');
        $this->addSql('ALTER TABLE medic_items DROP FOREIGN KEY FK_69983CD547A1C92C');
        $this->addSql('ALTER TABLE sortie_item DROP FOREIGN KEY FK_18EF9B1DAB0D61F7');
        $this->addSql('ALTER TABLE employe DROP FOREIGN KEY FK_F804D3B9ED5CA9E6');
        $this->addSql('ALTER TABLE sortie_item DROP FOREIGN KEY FK_18EF9B1DCC72D953');
        $this->addSql('DROP TABLE bon_de_livraison');
        $this->addSql('DROP TABLE bonde_commande');
        $this->addSql('DROP TABLE employe');
        $this->addSql('DROP TABLE fournisseur');
        $this->addSql('DROP TABLE medic_items');
        $this->addSql('DROP TABLE medicament');
        $this->addSql('DROP TABLE service');
        $this->addSql('DROP TABLE sortie_item');
        $this->addSql('DROP TABLE sorties');
    }
}
