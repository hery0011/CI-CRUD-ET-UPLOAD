package entite;
import java.util.ArrayList;

import controle.connection.ControleConnexion;

import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;

import javax.swing.JOptionPane;
public class Facture {
  private String client;
  private String artile;
  private double montant;
  //Propriété de type Arraylist qui contiendra les enregistrements de la base de données
  //-------------------------------------------
  private final ArrayList<Facture> enreg=new ArrayList<Facture>();//final: midéclarer constante indray mandeha an'
  //ilay array izy
  //propriété pour établir la connexion à la bd
  //-------------------------------------------
  private static Connection connexion=ControleConnexion.getConnexion();
  //1er constructeur
  //---------------
  
  public Facture(String client, String artile, double montant) {
		this.client = client;
		this.artile = artile;
		this.montant = montant;
	}
  //2e constructeur pour récupérer l'ArrayList avec les enregistrements
  //----------------
  public Facture(){
	  read();
  }
 
  //Getters et Setters de base
public String getClient() {
	return client;
}
public void setClient(String client) {
	this.client = client;
}
public String getArtile() {
	return artile;
}
public void setArtile(String artile) {
	this.artile = artile;
}
public double getMontant() {
	return montant;
}
public void setMontant(double montant) {
	this.montant = montant;
}
//Getter pour transmettre l'ArrayList
//-----------------------------------
public ArrayList<Facture> getEnreg(){
	return enreg;
}
//Lecture et récupération des enregistrements de la base de données
//------------------------------------------------------------------
public void read(){
	try{
		Statement state=connexion.createStatement();
		ResultSet rs=state.executeQuery("SELECT * FROM facture ORDER BY client");
		while(rs.next()){
			String client=rs.getString("client");
			String article=rs.getString("article");//anaran'ilay champ any anaty table
			double montant=rs.getDouble("montant");
			enreg.add(new Facture(client, article, montant));
		}
	}catch(SQLException e){
		JOptionPane.showMessageDialog(null, "Problème rencontré : "+e.getMessage(),
				"Résultat", JOptionPane.ERROR_MESSAGE);
	}
}
 //Ajout d'une nouvelle facture
//-----------------------------
 public boolean create(String client, String article, double montant){
	 String requete=null;
	 boolean creation=false;
	 try{
		 requete="INSERT INTO facture(client, article, montant) VALUES ('"
				 +client  +"','"
				 +article  +"','"
				 +montant  +"'"
				 +")";
		 Statement state=connexion.createStatement();
		 state.executeUpdate(requete);
		 creation=true;
	 }catch(SQLException e){
		 JOptionPane.showMessageDialog(null, "Problème rencontré : "+e.getMessage(),
				 "Résultat", JOptionPane.ERROR_MESSAGE);
	 }
	 return creation;
 }
 public static void main(String[] args){
	 Facture fact=new Facture();
	 fact.create("RAKOTO", "MODEM", 200);
	 fact.read();
	 ArrayList<Facture> listFact=new ArrayList<Facture>();
	 listFact=fact.getEnreg();
	 for(Facture facture : listFact){
		  System.out.println(facture.getClient()+" "+facture.getArtile()+" "+facture.getMontant());
	 }
 }
}
