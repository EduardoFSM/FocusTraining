using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class botoes : MonoBehaviour {

	// Use this for initialization
	void Start () {
		
	}
	
	// Update is called once per frame
	void Update () {
		
	}

   public void OnClick9(string cena0)
    {
        Application.LoadLevel(cena0);
    }

    public void OnClickPF(string perfil)
    {
        Application.LoadLevel(perfil);
    }

    public void OnClickDC(string dicas)
    {
        Application.LoadLevel(dicas);
    }

    public void OnClickTR(string treinos)
    {
        Application.LoadLevel(treinos);
    }

    public void OnClickPG(string progresso)
    {
        Application.LoadLevel(progresso);
    }

    public void OnClickVoltar(string cena0)
    {
        Application.LoadLevel(cena0);
    }
}
