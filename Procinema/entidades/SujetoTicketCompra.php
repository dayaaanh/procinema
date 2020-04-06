<?

abstract public interface Sujeto {
protected Observador []observan;
public Sujeto (){observan = new Observador[10];}
abstract public Observador adscribir (Observador e);
abstract public Observador quitar (Observador e);
abstract public void registra(Observador e);

}

?>