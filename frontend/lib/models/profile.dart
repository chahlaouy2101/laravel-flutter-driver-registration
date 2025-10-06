class Profile {
  GeneralInfo generalInfo;
  CarInfo carInfo;
  List<Documents> documents;

  Profile({this.generalInfo, this.carInfo, this.documents});
}

class GeneralInfo {
  String name;
  String email;
  String gender;
  String identity;
  String phone;
  DateTime birthDate;

  GeneralInfo({this.name, this.email, this.gender, this.identity, this.phone, this.birthDate});
}

class CarInfo {
  String brand;
  String model;
  int year;
  String plateDetails;
  int seats;
  String image;

  CarInfo({this.brand, this.model, this.year, this.plateDetails, this.seats, this.image});
}

class Documents {
  String identityDocument;
  String carLicense;
  String carApplication;
  int get uploadedCount => (identityDocument != null ? 1 : 0) + (carLicense != null ? 1 : 0) + (carApplication != null ? 1 : 0);

  Documents({this.identityDocument, this.carLicense, this.carApplication});
}