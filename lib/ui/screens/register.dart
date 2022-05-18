// import 'package: url_launcher/url_launcher.dart';
import 'package:flutter/material.dart';
import 'package:url_launcher/url_launcher.dart';
import '../components/custom_text_field.dart';
import 'login.dart';
import '../../viewmodel/register_viewmodel.dart';
import 'base_view.dart';

class SignupPage extends StatelessWidget {
  static const String id = 'register_view';
  SignupPage({Key? key}) : super(key: key);

  final _formkey = GlobalKey<FormState>();
  late final RegisterViewModel _model;
  late final BuildContext _context;

  @override
  Widget build(BuildContext context) {
    return BaseView<RegisterViewModel>(
      onModelReady: (model) {
        _model = model;
        _context = context;
        model.onModelReady();
      },
      onModelDestroy: (model) => model.onModelDestroy(),
      builder: (context, model, child) => GestureDetector(
        onTap: () => FocusScope.of(context).unfocus(),
        child: SafeArea(
          child: Scaffold(
            resizeToAvoidBottomInset: false,
            backgroundColor: Color.fromRGBO(40, 40, 41, 1),
            appBar: AppBar(
              elevation: 0,
              brightness: Brightness.light,
              backgroundColor: Color.fromRGBO(40, 40, 41, 1),
              leading: IconButton(
                  onPressed: () {
                    Navigator.pop(context);
                  },
                  icon: Icon(
                    Icons.arrow_back_ios,
                    size: 20,
                    color: Colors.white,
                  )),
            ),
            body: SafeArea(
              child: SingleChildScrollView(
                child: Container(
                    height: MediaQuery.of(context).size.height,
                    width: double.infinity,
                    child: Column(
                      mainAxisAlignment: MainAxisAlignment.spaceBetween,
                      children: [
                        Column(
                          children: [
                            Column(
                              mainAxisAlignment: MainAxisAlignment.spaceEvenly,
                              children: [
                                Text(
                                  "Sign up",
                                  style: TextStyle(
                                    color: Colors.white,
                                    fontSize: 30,
                                    fontWeight: FontWeight.bold,
                                  ),
                                ),
                                SizedBox(
                                  height: 20,
                                ),
                                Text(
                                  "Create an Account,Its free",
                                  style: TextStyle(
                                    fontSize: 15,
                                    color: Colors.grey[700],
                                  ),
                                ),
                                SizedBox(
                                  height: 30,
                                )
                              ],
                            ),
                            Padding(
                              padding: EdgeInsets.symmetric(horizontal: 40),
                              child: Column(
                                children: [
                                  const SizedBox(height: 40),
                                  _buildNameTextField(),
                                  const SizedBox(height: 20),
                                  _buildEmailTextField(),
                                  const SizedBox(height: 20),
                                  _buildPasswordTextField(),
                                  const SizedBox(height: 20),
                                ],
                              ),
                            ),
                            Padding(
                              padding: EdgeInsets.symmetric(horizontal: 40),
                              child: Container(
                                padding: EdgeInsets.only(top: 3, left: 3),
                                decoration: BoxDecoration(
                                  borderRadius: BorderRadius.circular(40),
                                  // border: Border(
                                  //     bottom: BorderSide(color: Colors.grey),
                                  //     top: BorderSide(color: Colors.grey),
                                  //     right: BorderSide(color: Colors.grey),
                                  //     left: BorderSide(color: Colors.grey))
                                ),
                                child: MaterialButton(
                                  minWidth: double.infinity,
                                  height: 60,
                                  onPressed: () {},
                                  color: Color.fromRGBO(238, 29, 82, 1),
                                  shape: RoundedRectangleBorder(
                                      borderRadius: BorderRadius.circular(40)),
                                  child: Text(
                                    "Sign Up",
                                    style: TextStyle(
                                      fontWeight: FontWeight.w600,
                                      fontSize: 16,
                                    ),
                                  ),
                                ),
                              ),
                            ),
                            SizedBox(
                              height: 20,
                            ),
                            Row(
                              mainAxisAlignment: MainAxisAlignment.center,
                              children: [
                                Text("Already have an account? ",
                                    style: TextStyle(color: Colors.white)),
                                InkWell(
                                  child: new Text('Login Now',
                                      style: TextStyle(
                                          fontWeight: FontWeight.bold,
                                          color: Colors.white)),
                                  onTap: () => Navigator.push(
                                      context,
                                      MaterialPageRoute(
                                          builder: (context) => Login())),
                                ),
                              ],
                            )
                          ],
                        ),
                      ],
                    )),
              ),
            ),
          ),
        ),
      ),
    );
  }

  Widget _buildNameTextField() {
    return CustomTextField(
      controller: _model.nameController,
      label: 'Name',
      hint: 'Enter your name',
      prefix: Icons.person,
      validator: _model.nameValidator,
    );
  }

  Widget _buildEmailTextField() {
    return CustomTextField(
      controller: _model.emailController,
      label: 'Email',
      hint: 'Enter your email',
      prefix: Icons.email,
      validator: _model.emailValidator,
    );
  }

  Widget _buildPasswordTextField() {
    return CustomTextField(
      controller: _model.passwordController,
      label: 'Password',
      hint: 'Enter your password',
      prefix: Icons.lock,
      isHidden: _model.isHidden,
      validator: _model.passwordValidator,
      suffix: IconButton(
        icon: _model.isHidden
            ? const Icon(Icons.visibility)
            : const Icon(Icons.visibility_off),
        onPressed: () {
          _model.isHidden = !_model.isHidden;
        },
      ),
    );
  }

  Widget makeInput({label, obsureText = false}) {
    return Column(
      crossAxisAlignment: CrossAxisAlignment.start,
      children: [
        Text(
          label,
          style: const TextStyle(
              fontSize: 15, fontWeight: FontWeight.w400, color: Colors.white),
        ),
        const SizedBox(
          height: 5,
        ),
        TextField(
          obscureText: obsureText,
          decoration: const InputDecoration(
              contentPadding: EdgeInsets.symmetric(vertical: 0, horizontal: 10),
              enabledBorder: OutlineInputBorder(
                borderSide: BorderSide(
                  color: Colors.grey,
                ),
              ),
              border: OutlineInputBorder(
                  borderSide: BorderSide(color: Colors.grey))),
        ),
        const SizedBox(height: 30)
      ],
    );
  }
}
