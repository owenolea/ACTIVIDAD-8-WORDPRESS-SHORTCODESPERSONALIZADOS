<?php

function listar_datos_proyecto_final() {

    global $wpdb;

    // Nombre de la tabla
    $nombre_tabla = $wpdb->prefix . "reclamos_otr";

    // Consulta
    $resultados = $wpdb->get_results("SELECT * FROM $nombre_tabla");

    // Si no hay datos
    if (empty($resultados)) {

        return "
        <div style='padding:20px; background:#ffe5e5; border-left:5px solid red; border-radius:10px;'>
            <h3>⚠ Error</h3>
            <p>No se encontraron reclamos registrados.</p>
        </div>
        ";

    }

    // Contadores
    $total = count($resultados);
    $pendientes = 0;
    $proceso = 0;
    $resueltos = 0;

    foreach ($resultados as $fila) {
        if ($fila->estado == 'Pendiente') {
            $pendientes++;
        }

        if ($fila->estado == 'En proceso') {
            $proceso++;
        }

        if ($fila->estado == 'Resuelto') {
            $resueltos++;
        }
    }

    // HTML
    $html = "
    <div style='font-family:Arial,Helvetica,sans-serif; background:#0f172a; color:#e2e8f0; padding:30px; border-radius:28px; box-shadow:0 28px 80px rgba(15,23,42,0.25);'>

        <div style='display:flex; flex-wrap:wrap; justify-content:space-between; align-items:flex-start; gap:20px;'>
            <div style='max-width:640px;'>
                <p style='margin:0 0 8px; text-transform:uppercase; letter-spacing:1px; font-size:0.80rem; color:#94a3b8;'>Observatorio OTR</p>
                <h2 style='margin:0; font-size:2.4rem; color:#ffffff;'>Panel de control de reclamos</h2>
                
            </div>
            <div style='display:grid; grid-template-columns:repeat(3, minmax(110px,140px)); gap:14px; width:100%; max-width:460px;'>
                <div style='background:rgba(148,163,184,0.08); border:1px solid rgba(148,163,184,0.15); border-radius:20px; padding:16px;'>
                    <p style='margin:0 0 8px; font-size:0.80rem; color:#94a3b8;'>Total</p>
                    <strong style='font-size:1.9rem; color:#38bdf8;'>$total</strong>
                </div>
                <div style='background:rgba(248,113,113,0.10); border:1px solid rgba(248,113,113,0.18); border-radius:20px; padding:16px;'>
                    <p style='margin:0 0 8px; font-size:0.80rem; color:#fca5a5;'>Pendientes</p>
                    <strong style='font-size:1.9rem; color:#fb7185;'>$pendientes</strong>
                </div>
                <div style='background:rgba(34,197,94,0.10); border:1px solid rgba(34,197,94,0.18); border-radius:20px; padding:16px;'>
                    <p style='margin:0 0 8px; font-size:0.80rem; color:#86efac;'>Resueltos</p>
                    <strong style='font-size:1.9rem; color:#22c55e;'>$resueltos</strong>
                </div>
            </div>
        </div>

        <div style='margin-top:30px; display:grid; grid-template-columns:repeat(auto-fit, minmax(170px, 1fr)); gap:16px;'>
            <div style='background:#111827; border:1px solid rgba(148,163,184,0.10); border-radius:22px; padding:18px;'>
                <p style='margin:0 0 6px; font-size:0.82rem; color:#94a3b8;'>En proceso</p>
                <strong style='font-size:2rem; color:#60a5fa;'>$proceso</strong>
            </div>
            <div style='background:#111827; border:1px solid rgba(148,163,184,0.10); border-radius:22px; padding:18px;'>
                <p style='margin:0 0 6px; font-size:0.82rem; color:#94a3b8;'>Reclamos totales</p>
                <strong style='font-size:2rem; color:#38bdf8;'>$total</strong>
            </div>
        </div>

        <div style='margin-top:32px; overflow:auto;'>
            <table style='width:100%; border-collapse:collapse; min-width:720px;'>
                <thead>
                    <tr style='text-align:left; border-bottom:1px solid rgba(148,163,184,0.18);'>
                        <th style='padding:16px 14px; color:#cbd5e1; text-transform:uppercase; font-size:0.80rem; letter-spacing:0.04em;'>ID</th>
                        <th style='padding:16px 14px; color:#cbd5e1; text-transform:uppercase; font-size:0.80rem; letter-spacing:0.04em;'>Título</th>
                        <th style='padding:16px 14px; color:#cbd5e1; text-transform:uppercase; font-size:0.80rem; letter-spacing:0.04em;'>Estado</th>
                    </tr>
                </thead>
                <tbody>
    ";

    foreach ($resultados as $fila) {
        $badge_color = '#64748b';
        $badge_bg = 'rgba(100,116,139,0.12)';

        if ($fila->estado == 'Pendiente') {
            $badge_color = '#fb7185';
            $badge_bg = 'rgba(251,113,133,0.14)';
        }

        if ($fila->estado == 'En proceso') {
            $badge_color = '#60a5fa';
            $badge_bg = 'rgba(96,165,250,0.14)';
        }

        if ($fila->estado == 'Resuelto') {
            $badge_color = '#22c55e';
            $badge_bg = 'rgba(34,197,94,0.14)';
        }

        $html .= "
                    <tr style='border-bottom:1px solid rgba(148,163,184,0.12);'>
                        <td style='padding:16px 14px; color:#e2e8f0;'>#" . esc_html($fila->id) . "</td>
                        <td style='padding:16px 14px; color:#f8fafc;'>" . esc_html($fila->titulo) . "</td>
                        <td style='padding:16px 14px;'>
                            <span style='display:inline-block; padding:8px 14px; border-radius:999px; background:" . esc_attr($badge_bg) . "; color:" . esc_attr($badge_color) . "; font-weight:600; font-size:0.90rem; letter-spacing:0.01em;'>" . esc_html($fila->estado) . "</span>
                        </td>
                    </tr>
        ";
    }

    $html .= "
                </tbody>
            </table>
        </div>
    </div>
    ";

    return $html;
}

// Registrar shortcode
add_shortcode('mostrar_proyecto', 'listar_datos_proyecto_final');