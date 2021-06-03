import java.io.*;
import java.util.ArrayList;
import java.util.Arrays;
import java.util.List;

public class JavaSerial {
    private final static List<String> commands = new ArrayList<>();

    public static void main(String args[]) throws Exception {
        // TODO: écrire une liste de commande en les passants à la méthode addCommands()
        // permettant d'afficher le contenu du fichier password.txt avant de le supprimer.
        // Exemple: addCommands("ls", "echo toto", "mkdir unDossier");

        VulnObj vulnObj = new VulnObj(commands);
        FileOutputStream fos = new FileOutputStream("./normalObj.serial");
        ObjectOutputStream os = new ObjectOutputStream(fos);
        os.writeObject(vulnObj);
        os.close();

    }

    private static void addCommands(String... cmds) {
        commands.addAll(Arrays.asList(cmds));
    }
}

class VulnObj implements Serializable {
    public List<String> cmd;

    public VulnObj(List<String> cmd) {
        this.cmd = cmd;
    }
}