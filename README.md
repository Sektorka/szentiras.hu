Szent�r�s .hu
========

A [szentiras.hu](http://szentiras.hu) teljes k�dja.
[![Build Status](https://travis-ci.org/borazslo/szentiras.hu.png)](https://travis-ci.org/borazslo/szentiras.hu)


## Fel�p�t�s

### Framework
A Laravel keretrendszert haszn�ljuk.

#### K�nyvt�r strukt�ra
- **app** - Maga a webalkalmaz�s.
- **bootstrap** - Framework beizz�t�s
- **deploy** - deployment konfigur�ci�k �s scriptek (apache, git hook stb.)
- **old** - a r�gi, �ssze-vissza programozott szentiras.hu k�dja
- **public** - a k�zvetlen�l kiszolg�lt f�jlok, az index.php, css, js �s hasonl�k
- **tmp** - tesztadatb�zis-p�lda

## Alapvet? funkci�k

### F?oldal:
- ford�t�sok list�ja, n�h�ny inform�ci�val kieg�sz�tve
- igenapt�r adott napi megjelen�t�se a katolikus.hu/igenaptar-b�l kihal�szva minden alkalommal
- mysql-b?l h�rek (szerkeszt? fel�let n�lk�l)

### K�nyvn�zeget�s
- Ford�t�s k�nyveinek list�ja
- Egy-egy k�nyv fejezeteinek list�ja bevezet?vel
- Egy-egy fejezet megjelen�t�se
    - L�p�s a k�vetkez?/el?z? fejezetre

###Id�z�s
- Url-be vagy keres?be be�rt szent�r�s hivatkoz�s �szrev�tele, elemz�se �s megjelen�t�se. pl. Mk3,4-7.9-12 vagy Mk3-6 vagy Mk 5,3-7,4.7 stb.
- Adott igehely/r�sz megjelen�t�se l�bjegyzettel �s magyar�zattal - PARTLY DONE Egyel?re a l�bjegyzet �s magyar�zat nem t�mogatott
- Link a t�bbi ford�t�s azonos k�nyv�re (sokszor m�r a r�vid�t�s!)
- Hib�s ford�t�s/k�nyvr�vid�t�s est�n �tvisz a helyes kombin�ci�ra

###Sz�vegmegjelen�t�s - Id�z�sn�l �s fejezet n�zetn�l is
- Vannak c�msorok, alc�msorok �s a sz�veg
- A vers sz�ma fels? indexben nem mindig a t�nyleges sorsz�m (ak�r bet? is lehet)
- Twitter �s facebook megoszt�s (hozz�val� html tag-ek hogy szebb legyen a megosztott anyag)
- Link a t�bbi ford�t�s azonos k�nyv�re (sokszor m�r a r�vid�t�s!)
- L�bjegyztekkel �s magyr�zatokkal. Ezek nem versekhez, hanem verstartom�nyokhoz tartoznak.(�ppen nem m?k�dik, mert nincs az adatb�zisban.)

###Keres�s
- Url-be vagy keres?be be�rt kifejez�s keres�se
- sz?ri lehet?s�g: b�rmely k�nyvre ill. �jsz�v/�sz�v; ford�t�s
- tal�latok csoportos�t�sa: versenk�nt vagy fejezetenk�nt
- A tal�latokat s�lyozza �s a legs�lyosabbal kezdi (teh�t nem el?fordul�si k�nyvbeli sorrendben jelennek meg)
- Amit figyel
    - Sphinx extended search nyelvtan szerint
    - sz�t�ben keres (megkeresi a hunspell a keres?sz� sz�t�veit, a szent�r�s minden vers�t sz�t�ves v�ltozatban is t�roljuk) PARTLY DONE (a keres?sz�t nem t�vezz�k) 
- Extr�k
    - megn�zni, hogy az alternat�v ford�t�sokban ugyan erre mennyi a tal�lat - csak a Sphinx indexben n�zi, ez�rt vill�mgyors
    - tippeket ad hasonl� kifejez�sekre ill. azonos sz�t�v? szavakra
    - tippeket ad k�zzel k�sz�l? szinon�ma sz�t�r alapj�n: l�tra/lajtorja, Nebukodonozor/Nebukadanazz�r, stb.
    - ugyan ezen sz�t�r szerint elg�pelt nevekre is tippeket ad

###API/Fejleszt?knek
- JSON v�laszokat ad megfelel? k�r�sekre
- f?k�nt a keres�sekre v�laszol �s elvileg mindent tudnia k�ne, amit a keres?nek, csak m�s form�tumban v�laszol
- TODO: k�nyvek automatikus /epub kimenetele ill. abb�l gener�lt /mobi (havont egyszer gy�rt, onnant�l mindig azt hviatkozza)

###Egy�b
- p�r statikusabb oldal van (c�mlap, inf�, impresszum, stb.) (nem kell szerkeszt? fel�let)
- cache: van egy csom� cache-el�s, f?leg db
- mysql cache: a keres�seket logolja �s cacheli, hogy az altern�tv�kat j�l mutassa �s l�ssam mi megy az �letben DONE
- r�vid urlek (�s r�gi-r�gi linkek hossz� url-jeit is �rtelmezi)
- GoogleAnalytics
