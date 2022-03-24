package com.example.vitalapp

import android.os.Bundle
import android.view.LayoutInflater
import android.view.View
import android.view.ViewGroup
import androidx.core.os.bundleOf
import androidx.fragment.app.Fragment
import androidx.navigation.fragment.findNavController
import com.example.vitalapp.databinding.FragmentIacBinding

class IacFragment: Fragment() {
    private var _binding: FragmentIacBinding? = null

    private val binding get() = _binding!!

    override fun onCreateView(
        inflater: LayoutInflater, container: ViewGroup?,
        savedInstanceState: Bundle?
    ): View? {

        _binding = FragmentIacBinding.inflate(inflater, container, false)
        return binding.root

    }

    fun calcIac(): Float {

        var altura: Float = binding.quadrilId.text.toString().toFloat()
        var peso: Float = binding.pesoId.text.toString().toFloat()


        var result = peso / (altura * altura)

        return result
    }

    override fun onViewCreated(view: View, savedInstanceState: Bundle?) {
        super.onViewCreated(view, savedInstanceState)

        var resultado: Float
        binding.btnIac.setOnClickListener() {

            resultado = calcIac()

            val bundle = bundleOf("result" to resultado)
            findNavController().navigate(R.id.ResultFragment, bundle)
        }

    }

    override fun onDestroyView() {
        super.onDestroyView()
        _binding = null
    }
}