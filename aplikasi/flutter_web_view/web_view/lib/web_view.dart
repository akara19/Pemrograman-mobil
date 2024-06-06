import 'package:flutter/material.dart';
import 'package:web_view/web_view.dart';

class WebViewApp extends StatefulWidget {
  const WebViewApp({super.key});

  @override
  State<WebViewApp> createState() => _WebViewAppState();
}

class _WebViewAppState extends State<WebViewApp> {
  late final WebViewController controller;

  @override
  void initState() {
    super.initState();
    controller = WebViewController()
    // Disesuaikan dengan keperluan masing-masing
    loadRequest(Uri.parse('http://192.168.18.13/mobile_webview/Pemrograman-mobile/aplikasi/'),
    );
  }

  @override
  Widget build(BuildContext context){
    return Scaffold(
      appBar: AppBar(
        title: const Text("Aplikasi Gudang"),
      ),
      body: WebViewWidget(
        controller: controller,
      ),
    );
  }
}
