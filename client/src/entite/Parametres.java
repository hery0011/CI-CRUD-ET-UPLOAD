package entite;

public class Parametres {
  private String nomUtilsateur;
  private String motDePasse;
  private String serveurBD;
  private String driverSGBD;
public Parametres(String nomUtilsateur, String motDePasse, String serveurBD,
		String driverSGBD) {
	super();
	this.nomUtilsateur = nomUtilsateur;
	this.motDePasse = motDePasse;
	this.serveurBD = serveurBD;
	this.driverSGBD = driverSGBD;
}
public Parametres(){//constructeur par défaut
	this.nomUtilsateur="root";
	this.motDePasse="";
	this.driverSGBD="com.mysql.jdbc.Driver";
	this.serveurBD="jdbc:mysql://localhost/vente";
}
public String getNomUtilsateur() {
	return nomUtilsateur;
}
public void setNomUtilsateur(String nomUtilsateur) {
	this.nomUtilsateur = nomUtilsateur;
}
public String getMotDePasse() {
	return motDePasse;
}
public void setMotDePasse(String motDePasse) {
	this.motDePasse = motDePasse;
}
public String getServeurBD() {
	return serveurBD;
}
public void setServeurBD(String serveurBD) {
	this.serveurBD = serveurBD;
}
public String getDriverSGBD() {
	return driverSGBD;
}
public void setDriverSGBD(String driverSGBD) {
	this.driverSGBD = driverSGBD;
}

}
