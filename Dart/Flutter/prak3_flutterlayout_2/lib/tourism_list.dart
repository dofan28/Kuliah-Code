import 'package:flutter/material.dart';
import 'package:prak3_flutterlayout_2/done_tourism_list.dart';
import 'package:prak3_flutterlayout_2/model/tourism_place.dart';
import 'package:prak3_flutterlayout_2/list_item.dart';
import 'package:prak3_flutterlayout_2/detail_screen.dart';
import 'package:prak3_flutterlayout_2/provider/done_tourism_provider.dart';

class TourismList extends StatefulWidget {
  const TourismList({Key? key}) : super(key: key);

  @override
  _TourismListState createState() => _TourismListState();
}

class _TourismListState extends State<TourismList> {
  final List<TourismPlace> tourismPlaceList = [
    TourismPlace(
        name: 'Wisata Bahari Lamongan',
        location: 'Jl Raya Paciran',
        gb1: 'assets/images/wbl-1.jpg',
        gb2: 'assets/images/wbl-2.jpg',
        gb3: 'assets/images/wbl-3.jpg',
        gb4: 'assets/images/wbl-4.png',
        imageAsset: 'assets/images/wbl-banner.jpg'),
    TourismPlace(
        name: 'Goa Maharani',
        location: 'Jl Raya Paciran',
        gb1: 'assets/images/gm-1.jpg',
        gb2: 'assets/images/gm-2.jpg',
        gb3: 'assets/images/gm-3.jpg',
        gb4: 'assets/images/gm-4.jpg',
        imageAsset: 'assets/images/gm-banner.jpg'),
    TourismPlace(
        name: 'Tanah Lot',
        location: 'Tabanan Bali',
        gb1: 'assets/images/tl-1.jpeg',
        gb2: 'assets/images/tl-2.jpg',
        gb3: 'assets/images/tl-3.jpg',
        gb4: 'assets/images/tl-4.jpg',
        imageAsset: 'assets/images/tl-banner.jpg'),
    TourismPlace(
        name: 'Candi Borobudur',
        location: 'Jl. Badrawati Magelang',
        gb1: 'assets/images/bor-1.jpg',
        gb2: 'assets/images/bor-2.jpg',
        gb3: 'assets/images/bor-3.jpg',
        gb4: 'assets/images/bor-4.jpg',
        imageAsset: 'assets/images/bor-banner.jpg'),
    TourismPlace(
        name: 'Malioboro',
        location: 'Jl. Margo Utomo',
        gb1: 'assets/images/mb-1.jpg',
        gb2: 'assets/images/mb-2.jpg',
        gb3: 'assets/images/mb-3.jpg',
        gb4: 'assets/images/mb-4.jpeg',
        imageAsset: 'assets/images/mb-banner.jpeg')
  ];

  @override
  Widget build(BuildContext context) {
    return ListView.builder(
      itemBuilder: (context, index) {
        final TourismPlace place = tourismPlaceList[index];
        return InkWell(
          onTap: () {
            Navigator.push(context, MaterialPageRoute(builder: (context) {
              return DetailScreen(place: place);
            }));
          },
          child: Consumer<DoneTourismProvider>(
            builder: (context, DoneTourismProvider data, widget) {
              return ListItem(
                  place: place,
                  isDone: DoneTourismProvider,
                  onCheckboxClick: (bool? value) {
              setState(() {
                if (value != null) {
                  value
                      ? doneTourismPlaceList.add(place)
                      : doneTourismPlaceList.remove(place);
                }
            },
          ),
        );
      },
      itemCount: tourismPlaceList.length,
    );
  }
}
