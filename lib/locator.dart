import '../services/api_service.dart';
import '../services/firebase_service.dart';
import '../services/local_storage_service.dart';
// import 'package:app/viewmodel/home_viewmodel.dart';
// import 'package:app/viewmodel/login_viewmodel.dart';
// import 'package:app/viewmodel/profile_viewmodel.dart';
import '../../viewmodel/register_viewmodel.dart';
// import 'package:app/viewmodel/startup_viewmodel.dart';
// import 'package:get_it/get_it.dart';
import 'package:get_it/get_it.dart';

GetIt locator = GetIt.instance;

Future<void> setUpLocator() async {
  // Services
  locator.registerSingleton<LocalStorageService>(
    await LocalStorageService.getInstance(),
  );
  locator.registerSingleton<FirebaseService>(FirebaseService());
  locator.registerSingleton<ApiService>(ApiService());

  // Viewmodel
  // locator.registerFactory<StartUpViewModel>(() => StartUpViewModel());
  // locator.registerFactory<LoginViewModel>(() => LoginViewModel());
  locator.registerFactory<RegisterViewModel>(() => RegisterViewModel());
  // locator.registerFactory<HomeViewModel>(() => HomeViewModel());
  // locator.registerFactory<ProfileViewModel>(() => ProfileViewModel());
}