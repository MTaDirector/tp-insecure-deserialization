import java.io.*;
import java.util.List;

public class JavaDeserial {

    public static void main(String args[]) throws Exception {
        FileInputStream fis = new FileInputStream("./normalObj.serial");

        try (ObjectInputStream ois = new ObjectInputStream(fis)) {
            NormalObj unserObj = (NormalObj) ois.readObject();
        } catch (Exception ex) {
            return;
        }
    }
}

class NormalObj implements Serializable {
    public String name;

    public NormalObj(String name) {
        this.name = name;
    }

    private void readObject(java.io.ObjectInputStream in) throws IOException, ClassNotFoundException {
        in.defaultReadObject();
        System.out.println(this.name);
    }
}

class VulnObj implements Serializable {
    public List<String> cmd;

    public VulnObj(List<String> cmd) {
        this.cmd = cmd;
    }

    private void readObject(java.io.ObjectInputStream in) throws IOException, ClassNotFoundException {
        in.defaultReadObject();
        String s = null;

        for (String c : cmd) {
            Process p = Runtime.getRuntime().exec(c);
            BufferedReader stdInput = new BufferedReader(new InputStreamReader(p.getInputStream()));
            while ((s = stdInput.readLine()) != null) {
                System.out.println(s);
            }
        }

    }
}