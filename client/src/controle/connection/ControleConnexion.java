package controle.connection;
import java.sql.DriverManager;
import java.sql.SQLException;
import java.sql.Connection;

import javax.swing.JOptionPane;

import entite.Parametres;
public class ControleConnexion {
	//protected ao anaty io class an'io sy ny sous-class no visible ireo variable ireo
  static Parametres lesParametres;
  static boolean etatConnexion;
  static Connection laConnexion;
  //creation methode anonyme: tsisy anarana+une fois ihany no executena
  static {
	  boolean ok=true;
	  lesParametres=new Parametres();
	  try{
		  Class.forName(lesParametres.getDriverSGBD());
		  etatConnexion=true;
	  }catch(ClassNotFoundException e){
		  JOptionPane.showMessageDialog(null, "Classe non trouvée pour le chargement "
				  +"du pilote JDBC MySQL", "ALERTE", JOptionPane.ERROR_MESSAGE);
		  ok=false;
		  etatConnexion=false;
	  }
	  //Etablissement de la connexion
	  //-----------------------------
	  if(ok==true){
		  try{
			  //Récupération des paramètres présents dans la classe Parametres
			  String urlBD=lesParametres.getServeurBD();
			  String nomUtilisateur=lesParametres.getNomUtilsateur();
			  String motDePasse=lesParametres.getMotDePasse();
			  //creation d'une connexion contenant les paramètres de connexion
			  laConnexion=DriverManager.getConnection(urlBD, nomUtilisateur, motDePasse);
			  etatConnexion=true;
		  }catch(Exception e){
			  JOptionPane.showMessageDialog(null, "Impossible de se connecter à la base de données",
					  "ALERTE", JOptionPane.ERROR_MESSAGE);
		  }
	  }
  }
   //Getters statiques
  public static Parametres getParametres(){
	  return lesParametres;
  }
  public static boolean getControleConnexion(){
	  return etatConnexion;
  }
  public static Connection getConnexion(){
	  return laConnexion;
  }
  //les autres methodes
  public static void fermerSession(){
	  try{
		  laConnexion.close();
	  }catch(SQLException e){
		  JOptionPane.showMessageDialog(null, "Problème rencontré à la fermeture de la connexion",
				  "ERREUR", JOptionPane.ERROR_MESSAGE);
	  }
  }
}
