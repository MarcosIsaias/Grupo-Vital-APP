package br.com.andersonchoren.sistemadelogin

import android.graphics.Color
import android.view.View
import com.example.vitalapp.Colors
import com.google.android.material.snackbar.Snackbar

fun showSnackbar(view: View,message:String, color: Colors = Colors.GREEN){
    val snackbar = Snackbar.make(view,message, Snackbar.LENGTH_SHORT)
    snackbar.view.setBackgroundColor(Color.parseColor(color.hex))
    snackbar.show()
}