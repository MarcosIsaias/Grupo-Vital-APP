package com.example.vitalapp

import android.os.Bundle
import android.view.LayoutInflater
import android.view.View
import android.view.ViewGroup
import androidx.core.os.bundleOf
import androidx.fragment.app.Fragment
import androidx.navigation.fragment.findNavController
import com.example.vitalapp.databinding.FragmentResultadoBinding


class ResultFragment: Fragment() {
    private var _binding: FragmentResultadoBinding? = null

    // This property is only valid between onCreateView and
    // onDestroyView.
    private val binding get() = _binding!!

    override fun onCreateView(
        inflater: LayoutInflater, container: ViewGroup?,
        savedInstanceState: Bundle?
    ): View? {

        _binding = FragmentResultadoBinding.inflate(inflater, container, false)
        return binding.root

    }

    override fun onViewCreated(view: View, savedInstanceState: Bundle?) {
        super.onViewCreated(view, savedInstanceState)


        binding.result.text = arguments?.getFloat("result").toString()
        if ((binding.result.text as String).toFloat() < 18.5.toFloat()) {
            binding.TipodeResult.text = "abaixo do peso"
        }
        else if((binding.result.text as String).toFloat() == 18.5.toFloat() || (binding.result.text as String).toFloat() <= 24.9.toFloat()){
            binding.TipodeResult.text = "Peso normal"
        }
        else if((binding.result.text as String).toFloat() == 25.toFloat() || (binding.result.text as String).toFloat() <= 29.9.toFloat()){
            binding.TipodeResult.text = "Sobre peso"
        }
        else if((binding.result.text as String).toFloat() == 30.toFloat() || (binding.result.text as String).toFloat() <= 34.9.toFloat()){
            binding.TipodeResult.text = "Obesidade Grau 1"
        }
        else if((binding.result.text as String).toFloat() == 35.toFloat() || (binding.result.text as String).toFloat() <= 39.9.toFloat()){
            binding.TipodeResult.text = "Obesidade Grau 2"
        }
        else if((binding.result.text as String).toFloat() >= 40.toFloat()){
            binding.TipodeResult.text = "Obesidade Grau 3 ou Mórbida"
        }
    }

    override fun onDestroyView() {
        super.onDestroyView()
        _binding = null
    }
}