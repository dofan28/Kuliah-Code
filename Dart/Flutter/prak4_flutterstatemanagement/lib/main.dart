import 'package:flutter/material.dart';
import 'package:prak3_flutterlayout_2/detail_screen.dart';
import 'package:prak3_flutterlayout_2/done_tourism_list.dart';
import 'package:prak3_flutterlayout_2/main_screen.dart';
import 'package:prak3_flutterlayout_2/provider/done_tourism_provider.dart';


void main() {
  runApp(const MyApp());
}

class MyApp extends StatelessWidget {
  const MyApp({Key? key}) : super(key: key);

  // This widget is the root of your application.
  @override
  Widget build(BuildContext context) {
    return ChangeNotifierProvider(
      create: (context) => DoneTourismProvider(),
      child: MaterialApp(
        title: 'Contacts',
        theme: ThemeData(),
        home: MainScreen(),
      ),
    );
  }
}
