package workspace;

import javax.swing.*;

import java.awt.Component;
import java.awt.event.*;

public class TempConverter {
	private JButton CK;		//celcius to kelvin
	private JButton CF;		//celcius to fahrenheit
	private JButton KC;
	private JButton KF;
	private JButton FC;
	private JButton FK;
	
	private JPanel content;
	private JLabel intro;
	private JLabel result;
	
	private JTextField text;
	
	public TempConverter() {
		text = new JTextField(3);//3 cols, not 20 chars
		
		CK = new JButton("Celcius to Kelvin");
		CF = new JButton("Celcius to Fahrenheit");
		KC = new JButton("Kelvin to Celcius");
		KF = new JButton("Kelvin to Fahrenheit");
		FC = new JButton("Fahrenheit to Celcius");
		FK = new JButton("Fahrenheit to Kelvin");
		
		intro = new JLabel("Type a value to be converted and press the appropriate button.");
		result = new JLabel("No conversion yet.");
		
		//Add the listeners to their respective buttons
		CK.addActionListener( CKAction() );
		CF.addActionListener( CFAction() );
		KC.addActionListener( KCAction() );
		KF.addActionListener( KFAction() );
		FC.addActionListener( FCAction() );
		FK.addActionListener( FKAction() );
						
		content = new JPanel();
		content.add(intro);
		content.add(text);
		content.add(CK);
		content.add(CF);
		content.add(KC);
		content.add(KF);
		content.add(FC);
		content.add(FK);
		content.add(result);
	}
	
	public Component getContent() {
		return(content);
	}
	
	private ActionListener CKAction() {
		//Create and define an action listener for button1
        ActionListener action = new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
            	try {
            		double input = Double.parseDouble(text.getText());
            		double convertedValue = input + 273.15;
            		result.setText(input + " degrees Celcius equals " + convertedValue + " degrees Kelvin.");
            	} catch (Exception ee) {
            		result.setText("#/ERROR");
            		JOptionPane.showMessageDialog(null, "INVALID INPUT", "InfoBox: " + "ERROR", JOptionPane.INFORMATION_MESSAGE);
            	}
            }
        };
        return action;
    }
	
	private ActionListener CFAction() {
		//Create and define an action listener for button1
        ActionListener action = new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
            	try {
            		double input = Double.parseDouble(text.getText());
            		double convertedValue = (input * (9/5)) + 32;
            		result.setText(input + " degrees Celcius equals " + convertedValue + " degrees Fahrenheit.");
            	} catch (Exception ee) {
            		result.setText("#/ERROR");
            		JOptionPane.showMessageDialog(null, "INVALID INPUT", "InfoBox: " + "ERROR", JOptionPane.INFORMATION_MESSAGE);
            	}
            }
        };
        return action;
    }
	
	private ActionListener KCAction() {
		//Create and define an action listener for button1
        ActionListener action = new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
            	try {
            		double input = Double.parseDouble(text.getText());
            		double convertedValue = input - 273.15;
            		result.setText(input + " degrees Kelvin equals " + convertedValue + " degrees Celcius.");
            	} catch (Exception ee) {
            		result.setText("#/ERROR");
            		JOptionPane.showMessageDialog(null, "INVALID INPUT", "InfoBox: " + "ERROR", JOptionPane.INFORMATION_MESSAGE);
            	}
            }
        };
        return action;
    }
	
	private ActionListener KFAction() {
		//Create and define an action listener for button1
        ActionListener action = new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
            	try {
            		double input = Double.parseDouble(text.getText());
            		double convertedValue = (input - 273.15) * (9/5) + 32;
            		result.setText(input + " degrees Kelvin equals " + convertedValue + " degrees Fahrenheit.");
            	} catch (Exception ee) {
            		result.setText("#/ERROR");
            		JOptionPane.showMessageDialog(null, "INVALID INPUT", "InfoBox: " + "ERROR", JOptionPane.INFORMATION_MESSAGE);
            	}
            }
        };
        return action;
    }
	
	private ActionListener FCAction() {
		//Create and define an action listener for button1
        ActionListener action = new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
            	try {
            		double input = Double.parseDouble(text.getText());
            		double convertedValue = (input - 32.0) * (5.0 / 9.0);
            		result.setText(input + " degrees Fahrenheit equals " + convertedValue + " degrees Celcius.");
            	} catch (Exception ee) {
            		result.setText("#/ERROR");
            		JOptionPane.showMessageDialog(null, "INVALID INPUT", "InfoBox: " + "ERROR", JOptionPane.INFORMATION_MESSAGE);
            	}
            }
        };
        return action;
    }
	
	private ActionListener FKAction() {
		//Create and define an action listener for button1
        ActionListener action = new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
            	try {
            		double input = Double.parseDouble(text.getText());
            		double convertedValue = (input - 32) * (5/9) + 273.15;
            		result.setText(input + " degrees Fahrenheit equals " + convertedValue + " degrees Kelvin.");
            	} catch (Exception ee) {
            		result.setText("#/ERROR");
            		JOptionPane.showMessageDialog(null, "INVALID INPUT", "InfoBox: " + "ERROR", JOptionPane.INFORMATION_MESSAGE);
            	}
            }
        };
        return action;
    }
}
