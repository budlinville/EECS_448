package workspace;

import javax.swing.JFrame;

public class TempConverterDriver {
	private static void createAndDisplayGUI() {
		JFrame frame = new JFrame("Temperature Converter");
		TempConverter tc = new TempConverter();
		
		frame.add(tc.getContent());
		frame.pack();
		frame.setVisible(true);
	}
	
	public static void main(String[] args) {
		createAndDisplayGUI();
	}
}
