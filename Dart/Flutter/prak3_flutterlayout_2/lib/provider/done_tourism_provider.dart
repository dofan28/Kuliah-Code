import 'package:flutter/foundation.dart';
import 'package:prak3_flutterlayout_2/done_tourism_list.dart';
import 'package:prak3_flutterlayout_2/model/tourism_place.dart';

class DoneTourismProvider extends ChangeNotifier {
  final List<TourismPlace> _doneTourismPlaceList = [];

  List<TourismPlace> get doneTourismList => _doneTourismPlaceList;

  void complete(TourismPlace place, bool isDone) {
    isDone
        ? _doneTourismPlaceList.add(place)
        : _doneTourismPlaceList.remove(place);
    notifyListeners();
  }
}
