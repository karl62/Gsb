1 er serveur W2008-R2

2 utilisateur:
administrateur  /Thoughtpolice2008
utilisateur    /Thoughtpolice2008


serveur: GSB-servad-g6

172.22.0.1

Active Directory (LDAP)
DNS => outil d'administration/DNS/zone de recherche direct/GSB.com


outil d'aministration/utilisateur et ordinateurs active derectory


bastien: Thoughtpolice2008
bogdan: Thoughtpolice2008
karl: Thoughtpolice2008


------------------------------------------------------------------------------
serveur: Servdev01
root/ thoughtpolice
utilisateur / thoughtpolice

3 services: HTTP PHP en mode debogage et l'ensemble est en mode develeppement
MYSQL(mariaDB)
Samba 4 partage(archivage, bin, www, home)
adresse ip servdev01: 172.22.0.2 255.255.0.0
DNS: 172.22.0.1

navigateur: https://localhost:10000
system, utilisateur, cree grp Informatique
3 utilisateurs
Bastien: Thoughtpolice2008
Bogdan: Thoughtpolice2008
Karl: Thoughtpolice2008

fenetre de commande:
smbpasswd -a Bastien
mdp:Thoughtpolice2008

smbpasswd -a Bogdan
mdp:Thoughtpolice2008

smbpasswd -a Karl
mdp:Thoughtpolice2008


fenetre de commande: 
service httpd start
service mysqld start
systemctl start smb.service nmb.service 

servdev01.gsb.com 
--------------------------------------------------------------------------------

Servprod01:
root/ thoughtpolice
utilisateur / thoughtpolice

Http+PHP parametrage production 
MYSQL
Samba 2 partages: sauvegarde,home
FTP : vsftp

INSTALLER: changer l'ip du poste(172.22.0.10)
DNS: 172.22.0.1
lancer les services:
service httpd start
service mysqld start
systemctl start smb.service nmb.service 
service vsftpd start










