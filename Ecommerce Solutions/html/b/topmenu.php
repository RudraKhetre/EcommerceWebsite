<?
/*
 * Ecommerce solutions
 * Copyright (C) 2006-2100 Sandro Stracuzzi <info@persefone.it> <sandrostracuzzi@hotmail.com>
 *
 * http://www.ecommercesolutions.it
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public License
 * version 2.1 as published by the Free Software Foundation.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Lesser General Public License for more details at
 * http://www.gnu.org/copyleft/lgpl.html
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 *
 * Note sulla licenza:
 * E' vietato distribuire il software dietro pagamento di denaro oppure ricevere un compenso
 * per la gestione del software. Il software � personale e puoi essere distribuito solo gratuitamente.
 * L'autore del software � sandro stracuzzi e va citato insieme al sito ufficiale http://www.ecommercesolutions.it
 * in ogni pagina del sito.
 * E' severamente vietato eliminare i riferimenti all'autore o al sito web dalle pagine del sito.
 *
 * Chiunque non accetti queste note o � contrario ad esse � pregato di non utilizzare il software altrimenti
 * verr� perseguito legalmente.
 *
*/
?>


        <a href="index.php">Home</a> |
        <a href="offerte.php">Offerte</a>  |
        <a href="novita.php">Novita</a> |
 <?
        $obj->connessione();
        $result = mysql_query("select * from altrepagine where posto=0 order by nome ");
        while($array=mysql_fetch_array($result)){
        echo "<a href=\"pagine.php?id=$array[id]\">$array[nome]</a> |";
        }
?>

        <a href="nuovo_utente.php">Registrati</a> |
        <a href="login.php">Login</a> |
        <a href="ordini.php">Ordini</a>