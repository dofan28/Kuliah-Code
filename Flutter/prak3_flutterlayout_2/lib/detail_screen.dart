import 'package:flutter/material.dart';
import 'package:prak3_flutterlayout_2/model/tourism_place.dart';
import 'package:prak3_flutterlayout_2/main_screen.dart';

class DetailScreen extends StatelessWidget {
  const DetailScreen({Key? key, required this.place}) : super(key: key);

  final TourismPlace place;

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      body: SafeArea(
        child: Column(
          crossAxisAlignment: CrossAxisAlignment.stretch,
          children: <Widget>[
            Image.asset(
              place.imageAsset,
              height: 100,
              width: 200,
            ),
            Container(
                margin: const EdgeInsets.only(top: 16.0),
                child: Text(
                  place.name,
                  textAlign: TextAlign.center,
                  style: const TextStyle(fontSize: 30.0, fontFamily: 'Lobster'),
                )),
            Container(
              margin: const EdgeInsets.symmetric(vertical: 16.0),
              child: Row(
                mainAxisAlignment: MainAxisAlignment.spaceEvenly,
                children: <Widget>[
                  Column(
                    children: const <Widget>[
                      Icon(Icons.phone),
                      Text('Elevated Button'),
                    ],
                  ),
                  Column(
                    children: const <Widget>[
                      Icon(Icons.message),
                      Text('08.00-16.00'),
                    ],
                  ),
                ],
              ),
            ),
            Container(
              padding: const EdgeInsets.all(16.0),
              child: const Text(
                'Barcelona adalah salah satu klub raksasa Eropa asal Spanyol. Klub yang dijuluki Los Cules ini bermarkas di Stadion Camp Nou di kota Barcelona, Spanyol. Barca menjadi klub populer yang mampu menorehkan sejumlah prestasi di berbagai kompetisi, baik di kancah domestik maupun internasional.',
                textAlign: TextAlign.center,
                style: TextStyle(fontSize: 16.0, fontFamily: 'Oxygen'),
              ),
            ),
            Container(
              height: 150,
              child: ListView(
                scrollDirection: Axis.horizontal,
                children: <Widget>[
                  Padding(
                    padding: const EdgeInsets.all(4.0),
                    child: ClipRRect(
                      borderRadius: BorderRadius.circular(20),
                      child: Image.asset(place.gb1),
                    ),
                  ),
                  Padding(
                    padding: const EdgeInsets.all(4.0),
                    child: ClipRRect(
                      borderRadius: BorderRadius.circular(20),
                      child: Image.asset(place.gb2),
                    ),
                  ),
                  Padding(
                    padding: const EdgeInsets.all(4.0),
                    child: ClipRRect(
                      borderRadius: BorderRadius.circular(20),
                      child: Image.asset(place.gb3),
                    ),
                  ),
                  Padding(
                    padding: const EdgeInsets.all(4.0),
                    child: ClipRRect(
                      borderRadius: BorderRadius.circular(20),
                      child: Image.asset(place.gb4),
                    ),
                  ),
                ],
              ),
            )
          ],
        ),
      ),
    );
  }
}
