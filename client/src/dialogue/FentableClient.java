package dialogue;

import java.awt.BorderLayout;
import java.awt.Color;
import java.awt.Cursor;
import java.awt.EventQueue;
import java.awt.Font;

import javax.swing.JFrame;
import javax.swing.JPanel;
import javax.swing.border.EmptyBorder;
import javax.swing.JLabel;
import javax.swing.ImageIcon;

import java.awt.event.MouseAdapter;
import java.awt.event.MouseEvent;

public class FentableClient extends JFrame {

	private JPanel jPan_P;
	private JLabel jLab_Nom;
	private JLabel jlab_Rechercher;
	private JLabel jlab_Modifier;
	private JLabel label_2;
	private JLabel label_3;

	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					FentableClient frame = new FentableClient();
					frame.setVisible(true);
				} catch (Exception e) {
					e.printStackTrace();
				}
			}
		});
	}

	/**
	 * Create the frame.
	 */
	public FentableClient() {
		setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		setBounds(100, 100, 725, 626);
		jPan_P = new JPanel();
		jPan_P.setBorder(new EmptyBorder(5, 5, 5, 5));
		setContentPane(jPan_P);
		jPan_P.setLayout(null);
		jPan_P.add(getJLab_Nom());
		jPan_P.add(getJlab_Rechercher());
		jPan_P.add(getJlab_Modifier());
		jPan_P.add(getLabel_2());
		jPan_P.add(getLabel_3());
	}
	public JLabel getJLab_Nom() {
		if (jLab_Nom == null) {
			jLab_Nom = new JLabel("Ajouter");
			jLab_Nom.setFont(new Font("Tahoma", Font.BOLD, 11));
			jLab_Nom.addMouseListener(new MouseAdapter() {
				
				public void mouseEntered(MouseEvent arg0) {
					
					jLab_Nom.setIcon(new ImageIcon(FentableClient.class.getResource("/images/gestion/ajouter2.png")));
					
					jLab_Nom.setFont(new Font("Segoe UI", Font.HANGING_BASELINE, 12));
					jLab_Nom.setForeground(Color.BLUE);
					jLab_Nom.setBounds(57, 42, 200, 50);
					jLab_Nom.setCursor(new Cursor(Cursor.HAND_CURSOR));
				}
				
				public void mouseExited(MouseEvent arg0) {
					jLab_Nom.setIcon(new ImageIcon(FentableClient.class.getResource("/images/gestion/ajouter.png")));
					jLab_Nom.setFont(new Font("Segoe UI", Font.PLAIN, 12));
					jLab_Nom.setForeground(Color.WHITE);
					jLab_Nom.setBounds(57, 42, 200, 50);
					jLab_Nom.setCursor(new Cursor(Cursor.HAND_CURSOR));
				}
			});
			jLab_Nom.setIcon(new ImageIcon(FentableClient.class.getResource("/images/gestion/ajouter.png")));
			jLab_Nom.setBounds(57, 42, 200, 50);
		}
		return jLab_Nom;
	}
	public JLabel getJlab_Rechercher() {
		if (jlab_Rechercher == null) {
			jlab_Rechercher = new JLabel("Rechercher");
			jlab_Rechercher.addMouseListener(new MouseAdapter() {
				@Override
				public void mouseEntered(MouseEvent arg0) {
					jlab_Rechercher.setIcon(new ImageIcon(FentableClient.class.getResource("/images/gestion/chercher2.png")));
					jlab_Rechercher.setForeground(Color.BLUE);
					jlab_Rechercher.setFont(new Font("Segoe UI", Font.HANGING_BASELINE, 14));
					jlab_Rechercher.setBounds(57, 95, 200, 50);
					jlab_Rechercher.setCursor(new Cursor(Cursor.HAND_CURSOR));
				}
				@Override
				public void mouseExited(MouseEvent arg0) {
					jlab_Rechercher.setIcon(new ImageIcon(FentableClient.class.getResource("/images/gestion/chercher.png")));
					jlab_Rechercher.setForeground(Color.WHITE);
					jlab_Rechercher.setFont(new Font("Segoe UI", Font.PLAIN, 14));
					jlab_Rechercher.setBounds(57, 95, 200, 50);
				}
			});
			jlab_Rechercher.setIcon(new ImageIcon(FentableClient.class.getResource("/images/gestion/chercher2.png")));
			jlab_Rechercher.setBounds(57, 95, 200, 50);
		}
		return jlab_Rechercher;
	}
	public JLabel getJlab_Modifier() {
		if (jlab_Modifier == null) {
			jlab_Modifier = new JLabel("Modifier");
			jlab_Modifier.setIcon(new ImageIcon(FentableClient.class.getResource("/images/gestion/modifier2.png")));
			jlab_Modifier.addMouseListener(new MouseAdapter() {
				@Override
				public void mouseEntered(MouseEvent arg0) {
					jlab_Modifier.setFont(new Font("Segoe UI", Font.HANGING_BASELINE, 14));
					jlab_Modifier.setForeground(Color.BLUE);
					
					
				}
				@Override
				public void mouseExited(MouseEvent arg0) {
					jlab_Modifier.setFont(new Font("Segoe UI", Font.HANGING_BASELINE, 14));
					jlab_Modifier.setForeground(Color.WHITE);
					
				}
			});
			jlab_Modifier.setBounds(57, 156, 200, 50);
		}
		return jlab_Modifier;
	}
	public JLabel getLabel_2() {
		if (label_2 == null) {
			label_2 = new JLabel("New label");
			label_2.setBounds(57, 209, 200, 50);
		}
		return label_2;
	}
	public JLabel getLabel_3() {
		if (label_3 == null) {
			label_3 = new JLabel("New label");
			label_3.setBounds(57, 259, 200, 50);
		}
		return label_3;
	}
}
