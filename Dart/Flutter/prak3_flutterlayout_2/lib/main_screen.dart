import 'package:flutter/material.dart';
import 'package:prak3_flutterlayout_2/detail_screen.dart';
import 'package:prak3_flutterlayout_2/done_tourism_list.dart';
import 'package:prak3_flutterlayout_2/list_item.dart';
import 'package:prak3_flutterlayout_2/model/tourism_place.dart';
import 'package:prak3_flutterlayout_2/tourism_list.dart';

class MainScreen extends StatefulWidget {
  MainScreen({Key? key}) : super(key: key);

  @override
  _MainScreenState createState() => _MainScreenState();
}

class _MainScreenState extends State<MainScreen> {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: const Text('Wisata Indonesia'),
        actions: <Widget>[
          IconButton(
            icon: const Icon(Icons.done_outline),
            onPressed: () {
              Navigator.push(
                context,
                MaterialPageRoute(builder: (context) {
                  return DoneTourismList();
                }),
              );
            },
          )
        ],
      ),
      body: TourismList(),
    );
  }
}
